<?php
/*
Plugin Name: My Image Compressor
Plugin URI:
Description: An image compressor plugin for WordPress.
Version: 1.0.0
Author: Loay Hajjo
Author URI:
License: GPL2
*/

/* This code adds a filter to WordPress to handle uploaded images.
When an image is uploaded, it triggers the image_compressor_handle_upload function,
which compresses the image based on its MIME type using the image_compressor_compress_image function.
The compression quality for JPEG and PNG images is set to 60,
and different compression methods are applied depending on the image type. */


// Add a filter to handle uploaded images and compress them
add_filter( 'wp_handle_upload', 'image_compressor_handle_upload' );

// Function to handle image compression upon upload
function image_compressor_handle_upload( $upload ) {
    // Get the file path of the uploaded image
    $file_path = $upload['file'];

    // Compress the image and update the file path
    $file_path = image_compressor_compress_image( $file_path );

    // Update the file path in the upload data
    $upload['file'] = $file_path;

    // Return the updated upload data
    return $upload;
}

// Function to compress an image
function image_compressor_compress_image( $file_path ) {
    // Set the desired image quality (affects JPEG and PNG images)
    $image_quality = 60;

    // Get information about the image
    $info = getimagesize( $file_path );

    // Check the MIME type of the image and perform appropriate compression
    if ( $info['mime'] == 'image/jpeg' ) {
        // If JPEG image, create image resource and save with specified quality
        $image = imagecreatefromjpeg( $file_path );
        imagejpeg( $image, $file_path, $image_quality );
    } elseif ( $info['mime'] == 'image/png' ) {
        // If PNG image, create image resource and save with specified compression level
        // Compression level is calculated based on desired quality
        $image = imagecreatefrompng( $file_path );
        imagepng( $image, $file_path, round( 9 * $image_quality / 100 ) );
    } elseif ( $info['mime'] == 'image/gif' ) {
        // If GIF image, create image resource and save without compression (GIFs don't support compression)
        $image = imagecreatefromgif( $file_path );
        imagegif( $image, $file_path );
    } elseif ( $info['mime'] == 'image/webp' ) {
        // If WebP image, create image resource and save without compression (WebP already has efficient compression)
        $image = imagecreatefromwebp( $file_path );
        imagewebp( $image, $file_path );
    }

    // Return the file path of the compressed image
    return $file_path;
}