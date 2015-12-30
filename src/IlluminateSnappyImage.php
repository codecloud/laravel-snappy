<?php namespace CodeCloud\SnappyLaravel;

use CodeCloud\Snappy\Image;
use Illuminate\Filesystem\Filesystem;

class IlluminateSnappyImage extends Image {

	/**
	 * @param \Illuminate\Filesystem\Filesystem
     * @param string $binary
     * @param array $options
	 */
	public function __construct(Filesystem $fs, $binary, array $options)
	{
		parent::__construct($binary, $options);

		$this->fs = $fs;
	}

    /**
     * Wrapper for the "file_get_contents" function
     *
     * @param string $filename
     *
     * @return string
     */
    protected function getFileContents($filename)
    {
        return $this->fs->get($filename);
    }

    /**
     * Wrapper for the "file_exists" function
     *
     * @param string $filename
     *
     * @return boolean
     */
    protected function fileExists($filename)
    {
        return $this->fs->exists($filename);
    }

    /**
     * Wrapper for the "is_file" method
     *
     * @param string $filename
     *
     * @return boolean
     */
    protected function isFile($filename)
    {
        return $this->fs->isFile($filename);
    }

    /**
     * Wrapper for the "filesize" function
     *
     * @param string $filename
     *
     * @return integer or FALSE on failure
     */
    protected function filesize($filename)
    {
        return $this->fs->size($filename);
    }

    /**
     * Wrapper for the "unlink" function
     *
     * @param string $filename
     *
     * @return boolean
     */
    protected function unlink($filename)
    {
        return $this->fs->delete($filename);
    }

    /**
     * Wrapper for the "is_dir" function
     *
     * @param string $filename
     *
     * @return boolean
     */
    protected function isDir($filename)
    {
        return $this->fs->isDirectory($filename);
    }

    /**
     * Wrapper for the mkdir function
     *
     * @param string $pathname
     *
     * @return boolean
     */
    protected function mkdir($pathname)
    {
        return $this->fs->makeDirectory($pathname, 0777, true, true);
    }

}