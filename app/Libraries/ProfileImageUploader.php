<?php

namespace App\Libraries;

use App\Models\ProfileImageModel;
use CodeIgniter\Files\File;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\Images\Image;

class ProfileImageUploader
{
    protected $request;
    protected $image;
    public function __construct(IncomingRequest $request)
    {
        $this->request = $request;
        $this->image = service('image');
        // $studentModel = new StudentModel();
    }
    public function upload($stdID)
    {
        $profileimageModel = new ProfileImageModel();
        $studentProfileImage = $this->request->getFile('profile-image');
        $uploaded = [
            'student_id' => '3',
            'path' => 'ppp'
        ];
        if ($studentProfileImage->isValid() && !$studentProfileImage->hasMoved()) {
            $name = $studentProfileImage->getRandomName();
            $path = 'uploads/profile-images/' . $name;
            $studentProfileImage->move($path);

            $uploaded = [
                'student_id' => $stdID,
                'path' => $path
            ];

            $profileimageModel->insert($uploaded);
        }
        return $uploaded;
    }
}
