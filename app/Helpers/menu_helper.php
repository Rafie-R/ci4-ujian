<?php

if (! function_exists('menu_image_url')) {
    /**
     * Get the public URL for a menu image, with safe fallbacks.
     */
    function menu_image_url(?string $image): string
    {
        if (! empty($image)) {
            if (str_starts_with($image, 'http://') || str_starts_with($image, 'https://')) {
                return $image;
            }
            if (file_exists(FCPATH . 'images/' . $image)) {
                return base_url('images/' . $image);
            }
            if (file_exists(FCPATH . 'uploads/' . $image)) {
                return base_url('uploads/' . $image);
            }
        }

        // Default fallback to original Ayam Betutu photo
        if (file_exists(FCPATH . 'images/ayam-betutu-original.jpg')) {
            return base_url('images/ayam-betutu-original.jpg');
        }

        return base_url('favicon.ico');
    }
}
