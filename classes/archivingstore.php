<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Driver for storing archive data inside via the Moodle File API
 *
 * @package     archivingstore_moodle
 * @copyright   2025 Niels Gandraß <niels@gandrass.de>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace archivingstore_moodle;

use local_archiving\exception\storage_exception;
use local_archiving\file_handle;
use local_archiving\type\storage_tier;

// @codingStandardsIgnoreFile
defined('MOODLE_INTERNAL') || die(); // @codeCoverageIgnore


/**
 * Driver for storing archive data inside via the Moodle File API
 */
class archivingstore extends \local_archiving\driver\archivingstore {

    #[\Override]
    public static function get_storage_tier(): storage_tier {
        return storage_tier::LOCAL;
    }

    #[\Override]
    public static function supports_retrieve(): bool {
        return true;
    }

    #[\Override]
    public function is_available(): bool {
        return true;
    }

    #[\Override]
    public function get_free_bytes(): int {
        // TODO: Implement get_free_bytes() method.
        return 42;
    }

    #[\Override]
    public function store(int $jobid, \stored_file $file, string $path): file_handle {
        // TODO: Implement store() method.
        throw new storage_exception('notimplemented', 'archivingstore_localdir');
    }

    #[\Override]
    public function retrieve(file_handle $handle, \stdClass $fileinfo): \stored_file {
        // TODO: Implement retrieve() method.
        throw new storage_exception('notimplemented', 'archivingstore_localdir');
    }

    #[\Override]
    public function delete(file_handle $handle, bool $strict = false): void {
        // TODO: Implement delete() method.
        throw new storage_exception('notimplemented', 'archivingstore_localdir');
    }

}
