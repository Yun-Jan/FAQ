<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UploadfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFileUpload()
    {
        Storage::fake('TestFile');

        $response = $this->json('POST', '/TestFile', [
            'TestFile' => UploadedFile::fake()->image('TestFile.jpg')
        ]);

        // File is saved
        Storage::disk('TestFile')->assertExists('TestFile.jpg');

        // File is not saved
        Storage::disk('TestFile')->assertMissing('TestFile.jpg');
    }
}





