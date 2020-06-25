<?php
namespace Tests\Unit\Admin;
use App\Model\Blog;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class BlogTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function admin_can_add_blogs_with_valid_input()
    {
        $response = $this->post('/storeblog', [
            'title' => 'Saano Sahayog',
            'date' => '2020-12-10',
            'description' => 'Hamro Saano Sahayog',
            'image' => 'first.jpg',
            'status' => 1,
        ]);
        $storeblog = Blog::first();
        $this->assertCount(1, Blog::all());
        $response->assertRedirect('/viewblog');
        // $response->assertRedirect('/storeblog/' . $storeblog->id);
    }
    /** @test */
    public function blog_title_should_not_be_empty()
    {
        $response = $this->post('/storeblog', [
            'title' => '',
            'date' => '2020-12-10',
            'description' => 'Hamro Saano Sahayog',
            'image' => 'first.jpg',
            'status' => 1,
        ]);
        $response->assertSessionHasErrors('title');
    }
    /** @test */
    public function admin_can_update_blogs_with_valid_input()
    {
        $this->withExceptionHandling();
        $this->post('/storeblog', [
            'title' => 'Saano Sahayog',
            'date' => '2020-12-10',
            'description' => 'Hamro Saano Sahayog',
            'image' => 'first.jpg',
            'status' => 1,
        ]);
        $blog = Blog::first();
        $response = $this->post('/updateblog/' . $blog->id, [
            'title' => 'Saano Sahayog Blog',
            'date' => '2020-12-10',
            'description' => 'Hamro Saano Sahayog',
            'image' => 'first.jpg',
            'status' => 1,
        ]);
        $this->assertEquals('Saano Sahayog Blog', Blog::first()->title);
        $response->assertRedirect('/viewblog');
    }
    /** @test */
    public function admin_can_delete_blog()
    {
        $this->withoutExceptionHandling();
        $this->post('/storeblog', [
            'title' => 'Saano Sahayog',
            'date' => '2020-12-10',
            'description' => 'Hamro Saano Sahayog',
            'image' => 'first.jpg',
            'status' => 1,
        ]);
        $blog = Blog::first();
        $this->assertCount(1, Blog::all());
        $response = $this->get('/deleteblog/' . $blog->id);
        $this->assertCount(0, Blog::all());
        $response->assertRedirect('/viewblog');
    }
}