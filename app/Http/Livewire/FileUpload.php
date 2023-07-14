<?php

namespace App\Http\Livewire;

use App\Models\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\File as FileModel;
use Intervention\Image\Facades\Image as ResizeImage;

class FileUpload extends Component {

  use WithFileUploads;

  public $file;
  public File $fileModel;

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

  public function mount($fileModel){
    $this->fileModel = $fileModel;
  }

  public function render() {
    return view('livewire.file-upload');
  }

  public function upload() {
    $this->validate();
    $file_name = time() . '-' . $this->file->getClientOriginalName();

    // Store the image on filesystem.
    //$this->file->storeAs('images', $file_name, 'custom_public_path');
    $filePath = "uploads/images/" . $file_name;
    $image = ResizeImage::make($this->file);
    $image->resize(250, 250, function ($constraint) {
      $constraint->aspectRatio();
    })->save($filePath);

    $this->fileModel = FileModel::create([
      'name' => $file_name,
      'path' => $filePath,
    ]);

    $this->emitUp('fileUploaded', $this->fileModel);
  }

}
