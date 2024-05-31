<?php
  
use Illuminate\Support\Facades\Storage;
/**
 * Write code on Method
 *
 * @return response()
 */
    if (!function_exists('deleteImageFromSpecificPath')) {
        function deleteImageFromSpecificPath($imagePath,$name)
        {
            if(isset($name) && !empty($name)) {
                if (Storage::disk('public')->exists($imagePath.$name)) {
                    Storage::disk('public')->delete($imagePath.$name);
                    return true; // Return true if the image was successfully deleted.
                }
            }
            return false; // Return false if the image does not exist or cannot be deleted.
        }
    }
    if (!function_exists('getImagePath')) {
        function imagePathWithDefault($imagePath, $imageName, $defaultPath, $defaultName)
        {
            // If the image name is a valid URL
            if(!empty($imageName)) {
                if (filter_var($imageName, FILTER_VALIDATE_URL)) {
                    $headers = get_headers($imageName);
                    if ($headers && strpos($headers[0], '200')) {
                        return $imageName; // Return the valid URL as the image path
                    }
                }
                if (Storage::disk('public')->exists($imagePath . $imageName)) {
                    return asset('storage/'.$imagePath . $imageName);
                }
            }
            return $defaultPath . $defaultName;
        }
    }
    