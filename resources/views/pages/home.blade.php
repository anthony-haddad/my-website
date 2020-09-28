@extends("layouts.layout")

@section("content")
    <div class="p-10 font-montserrat-alternates">
        <section>
            <h2 class="font-semibold text-primary text-2xl mb-10 header-underline">SUMMARY</h2>
            <div class="flex items-center">
                <img src="{{ asset("images/pp.jpg") }}"
                     alt="profile-pic"
                     class="rounded-full border-2 border-solid border-tropical"
                     style="width: 175px; height: 175px">
                <p class="text-primary w-2/3 ml-5">I am a Web Developer with industry experience building websites and web apps. I specialize in <span class="font-semibold text-tropical">JavaScript</span> and have a professional experience working with <span class="font-semibold text-tropical">VueJS</span> and <span class="font-semibold text-tropical">Laravel</span>.</p>
            </div>
        </section>
    </div>
@endsection
