<?php
//
// use PHPUnit\Framework\TestCase;
// use jugger\ui\bootstrap\nav\Nav;
//
// class BootstrapNavTest extends TestCase
// {
//     public function testItems()
//     {
//         $this->assertEquals(
//             Nav::widget([
//                 'items' => [
//                     [
//                         'href' => '/',
//                         'text' => 'Link1',
//                     ],
//                     [
//                         'href' => '#',
//                         'text' => 'Link2',
//                     ],
//                 ],
//             ]),
//             "<ul class='nav'><li class='nav-item'><a class='nav-link' href='/'>Link1</a></li><li class='nav-item'><a class='nav-link' href='#'>Link2</a></li></ul>"
//         );
//         $this->assertEquals(
//             Nav::widget([
//                 'items' => [
//                     [
//                         'text' => 'Empty link',
//                     ]
//                 ],
//             ]),
//             "<ul class='nav'><li class='nav-item'><a class='nav-link' href='#'>Empty link</a></li></ul>"
//         );
//         $this->assertEquals(
//             Nav::widget([
//                 'items' => [
//                     [
//                         'href' => '#',
//                         'text' => 'Link',
//                         'active' => true,
//                     ]
//                 ],
//             ]),
//             "<ul class='nav'><li class='nav-item'><a class='nav-link active' href='#'>Link</a></li></ul>"
//         );
//         $this->assertEquals(
//             Nav::widget([
//                 'items' => [
//                     [
//                         'href' => '#',
//                         'text' => 'Link',
//                         'disabled' => true,
//                     ]
//                 ],
//             ]),
//             "<ul class='nav'><li class='nav-item'><a class='nav-link disabled' href='#'>Link</a></li></ul>"
//         );
//         $this->assertEquals(
//             Nav::widget([
//                 'items' => [
//                     '<li>free item</li>'
//                 ],
//             ]),
//             "<ul class='nav'><li>free item</li></ul>"
//         );
//     }
//
//     public function testOptions()
//     {
//         $this->assertEquals(
//             Nav::widget([
//                 'options' => [
//                     'id' => 'my-nav',
//                 ],
//             ]),
//             "<ul id='my-nav' class='nav'></ul>"
//         );
//         $this->assertEquals(
//             Nav::widget([
//                 'justified' => true,
//             ]),
//             "<ul class='nav nav-justified'></ul>"
//         );
//         $this->assertEquals(
//             Nav::widget([
//                 'tabs' => true,
//             ]),
//             "<ul class='nav nav-tabs'></ul>"
//         );
//         $this->assertEquals(
//             Nav::widget([
//                 'pills' => true,
//             ]),
//             "<ul class='nav nav-pills'></ul>"
//         );
//     }
//
//     public function testDropdown()
//     {
//         $this->assertEquals(
//             Nav::widget([
//                 'items' => [
//                     [
//                         'text' => 'DropDown',
//                         'items' => 'value',
//                     ]
//                 ],
//             ]),
//             "<ul class='nav nav-pills'></ul>"
//         );
//     }
// }
