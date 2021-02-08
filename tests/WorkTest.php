<?php

use PHPUnit\Framework\TestCase;

class WorkTest extends TestCase
{
    protected $testClass;

    protected function setUp(): void
    {
        $this->testClass = app\model\entites\work\Work::class;
    }

    /** 
     * @dataProvider providerNamespace 
     */

    public function testNamespace($a,$b,$c,$d)
    {
        $name = $this->testClass;
        $nameArray = explode('\\', $name);
        $this->assertEquals($nameArray[0], $a);
        $this->assertEquals($nameArray[1], $b);
        $this->assertEquals($nameArray[2], $c);
        $this->assertEquals($nameArray[3], $d);
    }

    public function providerNamespace()
    {
        return array(
            array('app', 'model', 'entites', 'work'),
        );
    }

    protected function tearDown(): void
    {
        $this->testClass = NULL;
    }
   

    /** 
     * @dataProvider providerFactorial 
     */

    public function testFactorial($title, $img, $git, $project, $description)
    {
        $work = new app\model\entites\work\Work($title, $img, $git, $project, $description);
        $this->assertEquals($work->title, $title);
        $this->assertEquals($work->img, $img);
        $this->assertEquals($work->git, $git);
        $this->assertEquals($work->project, $project);
        $this->assertEquals($work->description, $description);
    }
    public function providerFactorial()
    {
        return array(
            array('test', 'test', 'test', 'test', 'test'),
            array('sdfdsf sdfsdf sdfsdf', 'sdfdsf sdfsdf sdfsdf', 'sdfdsf sdfsdf sdfsdf', 'sdfdsf sdfsdf sdfsdf', 'sdfdsf sdfsdf sdfsdf'),
            array('3333*******44444$$$$$$$', '3333*******44444$$$$$$$', '3333*******44444$$$$$$$', '3333*******44444$$$$$$$', '3333*******44444$$$$$$$')
        );
    }
}
