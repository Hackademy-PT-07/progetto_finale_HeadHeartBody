<x-main>
    <x-slot:pageName>Annunci</x-slot:pageName>

    <!-- <div class="pt-5 mt-5 text-center">
        <h2 class="pt-4 fw-bold">Annunci</h2>
    </div> -->

    <div class="container col-10 mt-5 justify-content-center">
        <div class="row align-item-center">
            <h1 class='text-decoration-underline text-center bg-warning bg-gradient border border-4 border-warning rounded-top-4 p-3 mb-0 mt-5' id="titleForm">Annunci</h1>

            
            <div class="card mt-0 p-3 mb-5 border border-4 border-warning rounded-bottom-4">
                
                <div class="container">
                    <div class="row">
                        @foreach($announcements as $announcement)
                        <x-card :title="$announcement->title" :category="$announcement->category->name" :description="$announcement->description" :price="$announcement->price" />
                        @endforeach
                        
                        {{ $announcements->links()}}
                        
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="text-end pt-5">
                            <a class="btn btn-warning" href="#">Inserisci annuncio</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-main>