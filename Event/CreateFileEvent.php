<?php

/*
 * This file is part of the phlexible package.
 *
 * (c) Stephan Wentz <sw@brainbits.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phlexible\Component\Volume\Event;

use Phlexible\Component\Volume\FileSource\FileSourceInterface;
use Phlexible\Component\Volume\Model\FileInterface;

/**
 * Create file event.
 *
 * @author Stephan Wentz <sw@brainbits.net>
 */
class CreateFileEvent extends FileEvent
{
    /**
     * @var FileSourceInterface
     */
    private $fileSource;

    /**
     * @param FileInterface       $file
     * @param FileSourceInterface $fileSource
     */
    public function __construct(FileInterface $file, FileSourceInterface $fileSource)
    {
        parent::__construct($file);

        $this->fileSource = $fileSource;
    }

    /**
     * @return FileSourceInterface
     */
    public function getFileSource()
    {
        return $this->fileSource;
    }
}
