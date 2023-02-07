<?php

namespace App\Http\Controllers;
    use App\Models\Recipe;
    use Illuminate\Http\Request;
    use Throwable;

    class RecipeController extends Controller
{
    public function getAllRecipe(Request $request)
    {
        try {
            $recipe = Recipe::all();
        } catch (Throwable $e) {
            return response('Any Recipe found');
        }

        $response = [];

        if (isset($recipe[0])) {
            $response = [
                'success' => true,
                'message' => "Recipe fetched successfully",
                'data' => $recipe
            ];

            return response()->json($response);
        } else {

            $response = [
                'success' => false,
                'message' => "No recipe found",
                'data' => null
            ];
            return response()->json($response);
        }
    }

    public function getIdRecipe(Request $request)
    {
        $id = null;
        try {
            $id = Recipe::insertGetId($request->validate([
                'title' => 'required|string',
                'photo' => 'nullable|string',
                'ingredients' => 'required|string',
                'preparation' => 'required|string'
            ]));
        } catch (Throwable $e) {
            report($e);

            $response = [
                'success' => false,
                'message' => 'Recipe has not been created, some data may be missing',
                'data' => null
            ];
            return response()->json($response, 422);
        }
        if (is_numeric($id)) {
            $response = [
                'success' => true,
                'message' => 'Recipe created successfully',
                'data' => Recipe::findOrFail($id)
            ];
            return response()->json($response);
        }
    }

    public function deleteRecipe(Request $request, $id)
    {
        try {
            $deletedRecipe= Recipe::find($id);

            $recipe = $deletedRecipe;
            $recipe->delete();
            $response = [
                'success' => true,
                'message' => 'Recipe was deleted',
                'data' => $deletedRecipe
            ];
            return response()->json($response);

        } catch (Throwable $e) {
            report($e);
            $response = [
                'success' => false,
                'message' => 'Recipe has not been deleted because it wasnt not found',
                'data' => null
            ];
            return response()->json($response);
        }
    }

    public function updateRecipe(Request $request, $id)
    {
        if ($recipe = Recipe::find($id)) {

            try {
                $recipe->update($request->validate([
                    'title' => 'required|string',
                    'photo' => 'nullable|string',
                    'ingredients' => 'required|string',
                    'preparation' => 'required|string',
                ]));
            } catch (Throwable $e) {
                report($e);

                $response = [
                    'success' => false,
                    'message' => 'Recipe has not been updated, change the role name please',
                    'data' => null
                ];
                return response()->json($response, 422);
            }
            $recipe->save();
            $response = [
                'success' => true,
                'message' => 'Recipe updated successfully',
                'data' => $recipe
            ];
            return response()->json($response);
        } else {
            $response = [
                'success' => false,
                'message' => 'Recipe not found',
                'data' => null
            ];
            return response()->json($response);
        }
    }

    public function getById(Request $request, $id)
    {
        $recipe = Recipe::find($id);
        if ($recipe != null) {
            $response = [
                'success' => true,
                'message' => 'Recipe found successfully',
                'data' => $recipe
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Recipe not found',
                'data' => null
            ];
        }
        return response()->json($response);
    }




    public function ingredient(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);
        if ($recipe) {

            if ($recipe != null && $recipe->ingredient) {
                $response = [
                    'success' => true,
                    'message' => 'recipe with ingredient found successfully',
                    'data' => $recipe->ingredient
                ];
            } else {
                $response = [
                    'success' => false,
                    'message' => 'recipe with ingredient not found',
                    'data' => null
                ];
            }
        } else {
            $response = [
                'success' => false,
                'message' => 'recipe with ingredient not found',
                'data' => null
            ];
        }
        return response()->json($response);
    }


    public function users(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);
        if ($recipe) {

            if ($recipe != null && $recipe->user) {
                $response = [
                    'success' => true,
                    'message' => 'recipe with users found successfully',
                    'data' => $recipe->user
                ];
            } else {
                $response = [
                    'success' => false,
                    'message' => 'recipe with users not found',
                    'data' => null
                ];
            }
        } else {
            $response = [
                'success' => false,
                'message' => 'recipe with users not found',
                'data' => null
            ];
        }
        return response()->json($response);
    }

}
