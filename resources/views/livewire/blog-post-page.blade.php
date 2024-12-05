<div>
    <section class="pt-24 sm:pt-32">
        <div class="container mx-auto max-w-3xl">
            <h1 class="mb-8">{{ $post->title }}</h1>

            <div class="text-sm text-gray-500 mb-8">
                Published {{ $post->display_date }}
                @if ($post->is_edited)
                    · Last edited {{ $post->last_edited_at->format('F j, Y') }}
                @endif
            </div>

            @if ($post->featured_image)
                <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}"
                    class="w-full h-auto rounded-lg mb-8 max-w-md">
            @endif

            <div class="prose prose-lg max-w-none">
                {!! $post->body !!}
            </div>

            <div class="mt-16">
                <a href="{{ route('blog') }}" class="text-blue-600 hover:text-blue-800">
                    ← Back to Blog
                </a>
            </div>
        </div>
    </section>
</div>
