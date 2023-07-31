<?php

namespace App\Http\Livewire;

use App\Models\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\File as FileModel;
use Intervention\Image\Facades\Image as ResizeImage;

class FileUpload extends Component {

  use WithFileUploads;

  /**
   * The uploaded file.
   */
  public $file;

  /**
   * The file model.
   */
  public File $fileModel;

  public int $width = 1000;
  public int $height = 800;

  /**
   * The form rules.
   *
   * @return array
   *   Returns a default array of rules.
   */
  protected function rules(): array {
    return [
      'file' => [
        'required',
      ],
    ];
  }

  public function mount($fileModel, $width = 1000, $height = 800) {
    $this->fileModel = $fileModel;
    $this->width = $width;
    $this->height = $height;
  }

  public function render() {
    return view('livewire.file-upload');
  }

  public function upload() {
    $this->validate();
    $file_name = time() . '-' . $this->file->getClientOriginalName();

    // Store the image on filesystem.
    $filePath = "uploads/images/" . $file_name;
    $image = ResizeImage::make($this->file);
    $image->resize($this->width, $this->height, function ($constraint) {
      $constraint->aspectRatio();
    })->save($filePath);

    $this->fileModel = FileModel::create([
      'name' => $file_name,
      'path' => $filePath,
    ]);

    $this->emit('fileUploaded', $this->fileModel);
  }

}
