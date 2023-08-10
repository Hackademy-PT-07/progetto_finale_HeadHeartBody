<div class="col-3">
  <figure class="snip1418">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample85.jpg" alt="sample85" />
    <div class="add-to-cart">
      <i class="ion-android-add"></i>
      <span>Aggiungi al carrello</span>
    </div>
    <figcaption>
      <h3>{{ $announcement->title }}</h3>

      <p class="card-text text-warning text-decoration-underline">{{ $announcement->category->name }}</p>

      <p>{{ $announcement->description }}</p>

      <div class="price">€{{ $announcement->price }}</div>



      <p class="card-footer"> Creato il: {{ $announcement->created_at->format("d/m/Y") }} </p>

      


    </figcaption>
    <a href="{{route('announces.show', $announcement->id) }}"></a>
  </figure>
</div>