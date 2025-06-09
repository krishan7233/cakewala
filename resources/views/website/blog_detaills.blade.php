@extends('website.website_app')
@section('content')
<!DOCTYPE html>

<style>
.blog-main {
    flex: 3;
    min-width: 100%;
    max-width: 100%;
}

.container3 {
    max-width: 95%;
    margin: 0 auto;
    padding: 0 15px;
    margin-top: 190px;
    margin-bottom: 60px;
}
/* Header */
.site-header {
  background: #333;
  color: white;
  padding: 20px 0;
  text-align: center;
}
h2 {
    font-size: 1.56rem;
   
}
.logo {
  font-size: 2rem;
}

/* Blog Container */
.blog-container {
  display: flex;
  gap: 20px;

  flex-wrap: wrap;
}

/* Blog Main */
.blog-main {
  flex: 3;
  min-width: 300px;
}

.blog-title {
  font-size: 2rem;
  margin-bottom: 10px;
}

.blog-meta {
  font-size: 0.9rem;
  color: #666;
  margin-bottom: 20px;
}

.blog-image {
  max-width: 100%;
  height: auto;
  margin-bottom: 20px;
  border-radius: 6px;
}

.blog-content p {
  margin-bottom: 15px;
}

.blog-content blockquote {
  margin: 20px 0;
  padding: 15px 20px;
  background: #f0f0f0;
  border-left: 5px solid #0077cc;
  font-style: italic;
}

/* Sidebar */
.blog-sidebar {
    margin-top: 40px;
  flex: 1;
  min-width: 250px;
  background: #fff;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 6px;
  height: fit-content;
}
li >a {
    text-transform: capitalize;
    color: #000;
}
.blog-sidebar h2 {
  margin-bottom: 15px;
}

.blog-sidebar ul {
  list-style: none;
}

.blog-sidebar li {
  margin-bottom: 10px;
}

/* Footer */
.site-footer {
  text-align: center;
  background: #333;
  color: white;
  padding: 15px 0;
  margin-top: 40px;
}
.blog-main img {
    width: 100%;
}
/* Responsive */
@media (max-width: 768px) {
  .blog-container {
    flex-direction: column;
  }
.container3 {
    max-width: 95%;
    margin: 0 auto;
    padding: 0 15px;
    margin-top: 90px;
    margin-bottom: 60px;
}
  .blog-sidebar {
    margin-top: 30px;
  }

  .blog-title {
    font-size: 1.5rem;
  }
}

</style>


  <main class="container3 blog-container">
    <article class="blog-main">
      <h1 class="blog-title">{{$blogs->name}}</h1>
      <div class="blog-meta">
        <span>By Admin</span> | <span>{{$blogs->created_at}}</span>
      </div>
      <img src="{{asset($blogs->feature_image)}}" alt="{{$blogs->name}}" class="blog-image"/>

      <div class="blog-content">
        <p>{{$blogs->meta_title}}</p>

        <p>{{$blogs->meta_description}}</p>


        <p>{!! $blogs->blog_content !!}</p>
      </div>
    </article>

    <aside class="blog-sidebar">
      <h2>Recent Posts</h2>
      <ul>
         @foreach($recentblogs as $bvg)
        <li><a 
          href="{{ route('blog_detaills', [
                                        'blog_slug' => $bvg->slug,
                                    ]) }}"
        >{{ $bvg->name }}</a></li>
        @endforeach
      </ul>
    </aside>
  </main>

  



@endsection