<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testIndexFileExists()
    {
        $this->assertFileExists(__DIR__ . '/../src/index.php', 'File index.php tidak ditemukan.');
    }

    public function testContainsStudentName()
    {
        $content = file_get_contents(__DIR__ . '/../src/index.php');
        $this->assertStringContainsString('javier', $content, 'Nama mahasiswa tidak ditemukan di index.php');
    }
}
