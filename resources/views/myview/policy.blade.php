@section('title', 'Policy Brief')
@extends('myview.index')
@section('content')
@section('hero_bg', asset('assets/pinus/img/publikasi-hero.jpg'))
@section('link')
    <li class="breadcrumb-item"><a class="text-white" href="{{ route('beranda') }}">Beranda</a></li>
    <li class="breadcrumb-item active">Policy Brief</li>
@endsection
@include('myview.components.hero')
{{-- Halaman Article --}}

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Policy Brief PINUS</h2>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id atque adipisci facere error sit perferendis ratione quos. Inventore, ratione in tempora temporibus cupiditate ut vel blanditiis autem libero ipsum nesciunt aliquam cum eius dignissimos, suscipit qui dolore aperiam nihil ipsam, quibusdam eligendi optio soluta dicta quia. Maxime, eaque doloremque! Officiis, beatae aliquam. Accusamus dolore facere sed eveniet similique! Architecto assumenda mollitia voluptatum, laborum, rerum ab placeat voluptates libero ducimus incidunt earum ipsum animi quasi ipsa. Delectus dolor repellendus, porro, non eum, debitis beatae inventore voluptatibus rerum consequuntur quae nam adipisci amet praesentium. Cumque quaerat cum corporis est, autem perferendis assumenda?</p>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quae porro earum vero et quidem similique facere aspernatur doloremque odio consectetur sequi qui ullam, necessitatibus officiis veniam quisquam ratione excepturi. Magni consequuntur animi earum culpa.</p>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nostrum natus error accusantium earum deserunt eligendi nemo esse dolorem dolorum eum aspernatur nobis omnis a suscipit, voluptas temporibus quis recusandae ut non voluptatibus, sequi eveniet adipisci. Nostrum cupiditate suscipit amet ipsam id non, officia nisi rem molestias. Veniam natus sunt magnam odit reiciendis vero temporibus enim, exercitationem, blanditiis expedita voluptatem illum ratione quam accusantium cumque, qui dolore aut fugiat?</p>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, impedit maxime consectetur temporibus culpa esse doloribus non blanditiis iusto itaque ex, illum nisi rerum. Quo?</p>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit impedit consequatur quod recusandae natus mollitia, perspiciatis nobis. Ipsam, eveniet. Quasi.</p>
        </div>
    </div>
</div>

@endsection
