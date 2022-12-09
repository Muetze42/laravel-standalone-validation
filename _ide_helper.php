<?php
// @formatter:off
// phpcs:ignoreFile

namespace Illuminate\Support\Facades {
    class Config
    {
        /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function has($key)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->has($key);
        }

        /**
         * Get the specified configuration value.
         *
         * @param array|string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function get($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->get($key, $default);
        }

        /**
         * Get many configuration values.
         *
         * @param array $keys
         * @return array
         * @static
         */
        public static function getMany($keys)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->getMany($keys);
        }

        /**
         * Set a given configuration value.
         *
         * @param array|string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function set($key, $value = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->set($key, $value);
        }

        /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function prepend($key, $value)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->prepend($key, $value);
        }

        /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function push($key, $value)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->push($key, $value);
        }

        /**
         * Get all of the configuration items for the application.
         *
         * @return array
         * @static
         */
        public static function all()
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->all();
        }

        /**
         * Determine if the given configuration option exists.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function offsetExists($key)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->offsetExists($key);
        }

        /**
         * Get a configuration option.
         *
         * @param string $key
         * @return mixed
         * @static
         */
        public static function offsetGet($key)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->offsetGet($key);
        }

        /**
         * Set a configuration option.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function offsetSet($key, $value)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->offsetSet($key, $value);
        }

        /**
         * Unset a configuration option.
         *
         * @param string $key
         * @return void
         * @static
         */
        public static function offsetUnset($key)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->offsetUnset($key);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Config\Repository::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @throws \ReflectionException
         * @static
         * @return void
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Config\Repository::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Config\Repository::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Config\Repository::flushMacros();
        }

    }

    class File
    {
        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function exists($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->exists($path);
        }

        /**
         * Determine if a file or directory is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function missing($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->missing($path);
        }

        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @param bool $lock
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         * @return string
         */
        public static function get($path, $lock = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->get($path, $lock);
        }

        /**
         * Get contents of a file with shared access.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function sharedGet($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->sharedGet($path);
        }

        /**
         * Get the returned value of a file.
         *
         * @param string $path
         * @param array $data
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         * @return mixed
         */
        public static function getRequire($path, $data = [])
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->getRequire($path, $data);
        }

        /**
         * Require the given file once.
         *
         * @param string $path
         * @param array $data
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         * @return mixed
         */
        public static function requireOnce($path, $data = [])
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->requireOnce($path, $data);
        }

        /**
         * Get the contents of a file one line at a time.
         *
         * @param string $path
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         * @return \Illuminate\Support\LazyCollection
         */
        public static function lines($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->lines($path);
        }

        /**
         * Get the hash of the file at the given path.
         *
         * @param string $path
         * @param string $algorithm
         * @return string
         * @static
         */
        public static function hash($path, $algorithm = 'md5')
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->hash($path, $algorithm);
        }

        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string $contents
         * @param bool $lock
         * @return int|bool
         * @static
         */
        public static function put($path, $contents, $lock = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->put($path, $contents, $lock);
        }

        /**
         * Write the contents of a file, replacing it atomically if it already exists.
         *
         * @param string $path
         * @param string $content
         * @return void
         * @static
         */
        public static function replace($path, $content)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->replace($path, $content);
        }

        /**
         * Replace a given string within a given file.
         *
         * @param array|string $search
         * @param array|string $replace
         * @param string $path
         * @return void
         * @static
         */
        public static function replaceInFile($search, $replace, $path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->replaceInFile($search, $replace, $path);
        }

        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @return int
         * @static
         */
        public static function prepend($path, $data)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->prepend($path, $data);
        }

        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @return int
         * @static
         */
        public static function append($path, $data)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->append($path, $data);
        }

        /**
         * Get or set UNIX mode of a file or directory.
         *
         * @param string $path
         * @param int|null $mode
         * @return mixed
         * @static
         */
        public static function chmod($path, $mode = null)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->chmod($path, $mode);
        }

        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool
         * @static
         */
        public static function delete($paths)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->delete($paths);
        }

        /**
         * Move a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool
         * @static
         */
        public static function move($path, $target)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->move($path, $target);
        }

        /**
         * Copy a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool
         * @static
         */
        public static function copy($path, $target)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->copy($path, $target);
        }

        /**
         * Create a symlink to the target file or directory. On Windows, a hard link is created if the target is a file.
         *
         * @param string $target
         * @param string $link
         * @return void
         * @static
         */
        public static function link($target, $link)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->link($target, $link);
        }

        /**
         * Create a relative symlink to the target file or directory.
         *
         * @param string $target
         * @param string $link
         * @throws \RuntimeException
         * @static
         * @return void
         */
        public static function relativeLink($target, $link)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->relativeLink($target, $link);
        }

        /**
         * Extract the file name from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function name($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->name($path);
        }

        /**
         * Extract the trailing name component from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function basename($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->basename($path);
        }

        /**
         * Extract the parent directory from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function dirname($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->dirname($path);
        }

        /**
         * Extract the file extension from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function extension($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->extension($path);
        }

        /**
         * Guess the file extension from the mime-type of a given file.
         *
         * @param string $path
         * @throws \RuntimeException
         * @static
         * @return string|null
         */
        public static function guessExtension($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->guessExtension($path);
        }

        /**
         * Get the file type of a given file.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function type($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->type($path);
        }

        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false
         * @static
         */
        public static function mimeType($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->mimeType($path);
        }

        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function size($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->size($path);
        }

        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function lastModified($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->lastModified($path);
        }

        /**
         * Determine if the given path is a directory.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function isDirectory($directory)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isDirectory($directory);
        }

        /**
         * Determine if the given path is a directory that does not contain any other files or directories.
         *
         * @param string $directory
         * @param bool $ignoreDotFiles
         * @return bool
         * @static
         */
        public static function isEmptyDirectory($directory, $ignoreDotFiles = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isEmptyDirectory($directory, $ignoreDotFiles);
        }

        /**
         * Determine if the given path is readable.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function isReadable($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isReadable($path);
        }

        /**
         * Determine if the given path is writable.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function isWritable($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isWritable($path);
        }

        /**
         * Determine if two files are the same by comparing their hashes.
         *
         * @param string $firstFile
         * @param string $secondFile
         * @return bool
         * @static
         */
        public static function hasSameHash($firstFile, $secondFile)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->hasSameHash($firstFile, $secondFile);
        }

        /**
         * Determine if the given path is a file.
         *
         * @param string $file
         * @return bool
         * @static
         */
        public static function isFile($file)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isFile($file);
        }

        /**
         * Find path names matching a given pattern.
         *
         * @param string $pattern
         * @param int $flags
         * @return array
         * @static
         */
        public static function glob($pattern, $flags = 0)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->glob($pattern, $flags);
        }

        /**
         * Get an array of all files in a directory.
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[]
         * @static
         */
        public static function files($directory, $hidden = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->files($directory, $hidden);
        }

        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[]
         * @static
         */
        public static function allFiles($directory, $hidden = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->allFiles($directory, $hidden);
        }

        /**
         * Get all of the directories within a given directory.
         *
         * @param string $directory
         * @return array
         * @static
         */
        public static function directories($directory)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->directories($directory);
        }

        /**
         * Ensure a directory exists.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @return void
         * @static
         */
        public static function ensureDirectoryExists($path, $mode = 493, $recursive = true)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->ensureDirectoryExists($path, $mode, $recursive);
        }

        /**
         * Create a directory.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @param bool $force
         * @return bool
         * @static
         */
        public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->makeDirectory($path, $mode, $recursive, $force);
        }

        /**
         * Move a directory.
         *
         * @param string $from
         * @param string $to
         * @param bool $overwrite
         * @return bool
         * @static
         */
        public static function moveDirectory($from, $to, $overwrite = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->moveDirectory($from, $to, $overwrite);
        }

        /**
         * Copy a directory from one location to another.
         *
         * @param string $directory
         * @param string $destination
         * @param int|null $options
         * @return bool
         * @static
         */
        public static function copyDirectory($directory, $destination, $options = null)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->copyDirectory($directory, $destination, $options);
        }

        /**
         * Recursively delete a directory.
         * The directory itself may be optionally preserved.
         *
         * @param string $directory
         * @param bool $preserve
         * @return bool
         * @static
         */
        public static function deleteDirectory($directory, $preserve = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->deleteDirectory($directory, $preserve);
        }

        /**
         * Remove all of the directories within a given directory.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function deleteDirectories($directory)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->deleteDirectories($directory);
        }

        /**
         * Empty the specified directory of all files and folders.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function cleanDirectory($directory)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->cleanDirectory($directory);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param \Illuminate\Filesystem\(\Closure($this):  TWhenParameter)|TWhenParameter|null $value
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $default
         * @return $this|\Illuminate\Filesystem\TWhenReturnType
         * @static
         */
        public static function when($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->when($value, $callback, $default);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param \Illuminate\Filesystem\(\Closure($this):  TUnlessParameter)|TUnlessParameter|null  $value
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $default
         * @return $this|\Illuminate\Filesystem\TUnlessReturnType
         * @static
         */
        public static function unless($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->unless($value, $callback, $default);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Filesystem\Filesystem::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @throws \ReflectionException
         * @static
         * @return void
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Filesystem\Filesystem::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Filesystem\Filesystem::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Filesystem\Filesystem::flushMacros();
        }

    }

    class Storage
    {
        /**
         * Get a filesystem instance.
         *
         * @param string|null $name
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function drive($name = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->drive($name);
        }

        /**
         * Get a filesystem instance.
         *
         * @param string|null $name
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function disk($name = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->disk($name);
        }

        /**
         * Get a default cloud filesystem instance.
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function cloud()
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->cloud();
        }

        /**
         * Build an on-demand disk.
         *
         * @param string|array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function build($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->build($config);
        }

        /**
         * Create an instance of the local driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function createLocalDriver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createLocalDriver($config);
        }

        /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function createFtpDriver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createFtpDriver($config);
        }

        /**
         * Create an instance of the sftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function createSftpDriver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createSftpDriver($config);
        }

        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud
         * @static
         */
        public static function createS3Driver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createS3Driver($config);
        }

        /**
         * Create a scoped driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function createScopedDriver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createScopedDriver($config);
        }

        /**
         * Set the given disk instance.
         *
         * @param string $name
         * @param mixed $disk
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function set($name, $disk)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->set($name, $disk);
        }

        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get the default cloud driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultCloudDriver()
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->getDefaultCloudDriver();
        }

        /**
         * Unset the given disk instances.
         *
         * @param array|string $disk
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function forgetDisk($disk)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->forgetDisk($disk);
        }

        /**
         * Disconnect the given disk and remove from local cache.
         *
         * @param string|null $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            $instance->purge($name);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Assert that the given file or directory exists.
         *
         * @param string|array $path
         * @param string|null $content
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function assertExists($path, $content = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->assertExists($path, $content);
        }

        /**
         * Assert that the given file or directory does not exist.
         *
         * @param string|array $path
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function assertMissing($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->assertMissing($path);
        }

        /**
         * Assert that the given directory is empty.
         *
         * @param string $path
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
        public static function assertDirectoryEmpty($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->assertDirectoryEmpty($path);
        }

        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function exists($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->exists($path);
        }

        /**
         * Determine if a file or directory is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function missing($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->missing($path);
        }

        /**
         * Determine if a file exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function fileExists($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->fileExists($path);
        }

        /**
         * Determine if a file is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function fileMissing($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->fileMissing($path);
        }

        /**
         * Determine if a directory exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function directoryExists($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->directoryExists($path);
        }

        /**
         * Determine if a directory is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function directoryMissing($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->directoryMissing($path);
        }

        /**
         * Get the full path for the file at the given "short" path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function path($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->path($path);
        }

        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @return string|null
         * @static
         */
        public static function get($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->get($path);
        }

        /**
         * Create a streamed response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static function response($path, $name = null, $headers = [], $disposition = 'inline')
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->response($path, $name, $headers, $disposition);
        }

        /**
         * Create a streamed download response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static function download($path, $name = null, $headers = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->download($path, $name, $headers);
        }

        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param \Psr\Http\Message\StreamInterface|\Illuminate\Http\File|\Illuminate\Http\UploadedFile|string|resource $contents
         * @param mixed $options
         * @return string|bool
         * @static
         */
        public static function put($path, $contents, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->put($path, $contents, $options);
        }

        /**
         * Store the uploaded file on the disk.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $file
         * @param mixed $options
         * @return string|false
         * @static
         */
        public static function putFile($path, $file, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->putFile($path, $file, $options);
        }

        /**
         * Store the uploaded file on the disk with a given name.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $file
         * @param string $name
         * @param mixed $options
         * @return string|false
         * @static
         */
        public static function putFileAs($path, $file, $name, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->putFileAs($path, $file, $name, $options);
        }

        /**
         * Get the visibility for the given path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function getVisibility($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getVisibility($path);
        }

        /**
         * Set the visibility for the given path.
         *
         * @param string $path
         * @param string $visibility
         * @return bool
         * @static
         */
        public static function setVisibility($path, $visibility)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->setVisibility($path, $visibility);
        }

        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return bool
         * @static
         */
        public static function prepend($path, $data, $separator = '
')
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->prepend($path, $data, $separator);
        }

        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return bool
         * @static
         */
        public static function append($path, $data, $separator = '
')
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->append($path, $data, $separator);
        }

        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool
         * @static
         */
        public static function delete($paths)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->delete($paths);
        }

        /**
         * Copy a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool
         * @static
         */
        public static function copy($from, $to)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->copy($from, $to);
        }

        /**
         * Move a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool
         * @static
         */
        public static function move($from, $to)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->move($from, $to);
        }

        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function size($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->size($path);
        }

        /**
         * Get the checksum for a file.
         *
         * @throws UnableToProvideChecksum
         * @static
         * @return string|false
         */
        public static function checksum($path, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->checksum($path, $options);
        }

        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false
         * @static
         */
        public static function mimeType($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->mimeType($path);
        }

        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function lastModified($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->lastModified($path);
        }

        /**
         * Get a resource to read the file.
         *
         * @param string $path
         * @return resource|null The path resource or null on failure.
         * @static
         */
        public static function readStream($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->readStream($path);
        }

        /**
         * Write a new file using a stream.
         *
         * @param string $path
         * @param resource $resource
         * @param array $options
         * @return bool
         * @static
         */
        public static function writeStream($path, $resource, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->writeStream($path, $resource, $options);
        }

        /**
         * Get the URL for the file at the given path.
         *
         * @param string $path
         * @throws \RuntimeException
         * @static
         * @return string
         */
        public static function url($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->url($path);
        }

        /**
         * Determine if temporary URLs can be generated.
         *
         * @return bool
         * @static
         */
        public static function providesTemporaryUrls()
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->providesTemporaryUrls();
        }

        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @throws \RuntimeException
         * @static
         * @return string
         */
        public static function temporaryUrl($path, $expiration, $options = [])
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->temporaryUrl($path, $expiration, $options);
        }

        /**
         * Get an array of all files in a directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array
         * @static
         */
        public static function files($directory = null, $recursive = false)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->files($directory, $recursive);
        }

        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string|null $directory
         * @return array
         * @static
         */
        public static function allFiles($directory = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->allFiles($directory);
        }

        /**
         * Get all of the directories within a given directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array
         * @static
         */
        public static function directories($directory = null, $recursive = false)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->directories($directory, $recursive);
        }

        /**
         * Get all the directories within a given directory (recursive).
         *
         * @param string|null $directory
         * @return array
         * @static
         */
        public static function allDirectories($directory = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->allDirectories($directory);
        }

        /**
         * Create a directory.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function makeDirectory($path)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->makeDirectory($path);
        }

        /**
         * Recursively delete a directory.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function deleteDirectory($directory)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->deleteDirectory($directory);
        }

        /**
         * Get the Flysystem driver.
         *
         * @return \League\Flysystem\FilesystemOperator
         * @static
         */
        public static function getDriver()
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getDriver();
        }

        /**
         * Get the Flysystem adapter.
         *
         * @return \League\Flysystem\FilesystemAdapter
         * @static
         */
        public static function getAdapter()
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getAdapter();
        }

        /**
         * Get the configuration values.
         *
         * @return array
         * @static
         */
        public static function getConfig()
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->getConfig();
        }

        /**
         * Define a custom temporary URL builder callback.
         *
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function buildTemporaryUrlsUsing($callback)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            $instance->buildTemporaryUrlsUsing($callback);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param \Illuminate\Filesystem\(\Closure($this):  TWhenParameter)|TWhenParameter|null $value
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $default
         * @return $this|\Illuminate\Filesystem\TWhenReturnType
         * @static
         */
        public static function when($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->when($value, $callback, $default);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param \Illuminate\Filesystem\(\Closure($this):  TUnlessParameter)|TUnlessParameter|null  $value
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $default
         * @return $this|\Illuminate\Filesystem\TUnlessReturnType
         * @static
         */
        public static function unless($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->unless($value, $callback, $default);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Filesystem\FilesystemAdapter::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @throws \ReflectionException
         * @static
         * @return void
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Filesystem\FilesystemAdapter::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Filesystem\FilesystemAdapter::flushMacros();
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @throws \BadMethodCallException
         * @static
         * @return mixed
         */
        public static function macroCall($method, $parameters)
        {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $instance */
            return $instance->macroCall($method, $parameters);
        }

    }

    class Validator
    {
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return \Illuminate\Validation\Validator
         * @static
         */
        public static function make($data, $rules, $messages = [], $customAttributes = [])
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->make($data, $rules, $messages, $customAttributes);
        }

        /**
         * Validate the given data against the provided rules.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @throws \Illuminate\Validation\ValidationException
         * @static
         * @return array
         */
        public static function validate($data, $rules, $messages = [], $customAttributes = [])
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->validate($data, $rules, $messages, $customAttributes);
        }

        /**
         * Register a custom validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         * @return void
         * @static
         */
        public static function extend($rule, $extension, $message = null)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extend($rule, $extension, $message);
        }

        /**
         * Register a custom implicit validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         * @return void
         * @static
         */
        public static function extendImplicit($rule, $extension, $message = null)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extendImplicit($rule, $extension, $message);
        }

        /**
         * Register a custom dependent validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         * @return void
         * @static
         */
        public static function extendDependent($rule, $extension, $message = null)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extendDependent($rule, $extension, $message);
        }

        /**
         * Register a custom validator message replacer.
         *
         * @param string $rule
         * @param \Closure|string $replacer
         * @return void
         * @static
         */
        public static function replacer($rule, $replacer)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->replacer($rule, $replacer);
        }

        /**
         * Indicate that unvalidated array keys should be included in validated data when the parent array is validated.
         *
         * @return void
         * @static
         */
        public static function includeUnvalidatedArrayKeys()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->includeUnvalidatedArrayKeys();
        }

        /**
         * Indicate that unvalidated array keys should be excluded from the validated data, even if the parent array was validated.
         *
         * @return void
         * @static
         */
        public static function excludeUnvalidatedArrayKeys()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->excludeUnvalidatedArrayKeys();
        }

        /**
         * Set the Validator instance resolver.
         *
         * @param \Closure $resolver
         * @return void
         * @static
         */
        public static function resolver($resolver)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->resolver($resolver);
        }

        /**
         * Get the Translator implementation.
         *
         * @return \Illuminate\Contracts\Translation\Translator
         * @static
         */
        public static function getTranslator()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getTranslator();
        }

        /**
         * Get the Presence Verifier implementation.
         *
         * @return \Illuminate\Validation\PresenceVerifierInterface
         * @static
         */
        public static function getPresenceVerifier()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getPresenceVerifier();
        }

        /**
         * Set the Presence Verifier implementation.
         *
         * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
         * @return void
         * @static
         */
        public static function setPresenceVerifier($presenceVerifier)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->setPresenceVerifier($presenceVerifier);
        }

        /**
         * Get the container instance used by the validation factory.
         *
         * @return \Illuminate\Contracts\Container\Container|null
         * @static
         */
        public static function getContainer()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getContainer();
        }

        /**
         * Set the container instance used by the validation factory.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Illuminate\Validation\Factory
         * @static
         */
        public static function setContainer($container)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->setContainer($container);
        }

    }
}

namespace Illuminate\Support {
    class Arr {

    }
    class Js {

    }
    class Str {

    }
    class Collection {
        /**
         *
         *
         * @see \Laravel\Nova\NovaServiceProvider::registerCollectionMacros()
         * @static
         */
        public static function isAssoc()
        {
            return \Illuminate\Support\Collection::isAssoc();
        }

    }
}

namespace {
    class Config extends \Illuminate\Support\Facades\Config
    {
    }

    class File extends \Illuminate\Support\Facades\File
    {
    }

    class Storage extends \Illuminate\Support\Facades\Storage
    {
    }

    class Validator extends \Illuminate\Support\Facades\Validator {}
}
