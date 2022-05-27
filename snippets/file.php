<?php

// Save file
$fileId = \CFile::SaveFile($_FILES['somefile'], 'FolderName_InUploads');

// Resize image
\CFile::ResizeImageGet($pictureId, ['width' => 300, 'height' => 9999], BX_RESIZE_IMAGE_PROPORTIONAL);
