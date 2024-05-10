@extends('template.main')
@section('title', 'Cart')
@section('body')
<!-- cart + summary -->
<section class="bg-light my-5">
  <div class="container">
    <div class="row">
      <!-- cart -->
      <div class="col-lg-9">
        <div class="card border shadow-0">
          <div class="m-4">
            <h4 class="card-title mb-4">Your shopping cart</h4>
            @foreach ($data as $d)

            <div class="row gy-3 mb-4">
                <div class="col-lg-5">
                  <div class="me-lg-5">
                    <div class="d-flex">
                      <img src="{{ $d['item']->image }}" class="border rounded me-3" style="width: 96px; height: 96px;" />
                      <div class="">
                        <a href="#" class="nav-link">{{ $d['item']->name }}</a>
                        <p class="text-muted">{{ $d['id'] }}</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                <div class="col-md-4">
        <input type="number" name='quantity[]' value="{{ item.quantity }}" class="form-control" min="1" max="{{ item.stock }}" />
    </div>
    <div class="col-md-4">
        <span class="h6">${{ item.totalPrice }}</span> <br />
        <small class="text-muted">${{ item.price }} each</small>
    </div>
                </div>
                <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                <form action="{{ route('cart.remove', item.id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Remove</button>
            <button type="button" class="btn btn-secondary btn-sm" onclick="addToFavorites(item.id)">Add to Favorites</button>
        </form>
                </div>
              </div>
            @endforeach
          </div>

          <div class="border-top pt-4 mx-4 mb-4">
            <p><i class="fas fa-truck text-muted fa-lg"></i> Free Delivery within 1-2 weeks</p>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip
            </p>
          </div>
        </div>
      </div>
      <!-- cart -->
      <!-- summary -->
      <div class="col-lg-3">
        <div class="card mb-3 border shadow-0">
          <div class="card-body">
            <form>
              <div class="form-group">
                <label class="form-label">Have coupon?</label>
                <div class="input-group">
                  <input type="text" class="form-control border" name="" placeholder="Coupon code" />
                  <button class="btn btn-light border">Apply</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="card shadow-0 border">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="mb-2">Total price:</p>
              <p class="mb-2">{{ $cart->grandTotal }}</p>
            </div>
            {{-- <div class="d-flex justify-content-between">
              <p class="mb-2">Discount:</p>
              <p class="mb-2 text-success">-$60.00</p>
            </div>
            <div class="d-flex justify-content-between">
              <p class="mb-2">TAX:</p>
              <p class="mb-2">$14.00</p>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <p class="mb-2">Total price:</p>
              <p class="mb-2 fw-bold">$283.00</p>
            </div> --}}

            <div class="mt-3">
              <a href="#" class="btn btn-success w-100 shadow-0 mb-2"> Make Purchase </a>
              <a href="#" class="btn btn-light w-100 border mt-2"> Back to shop </a>
            </div>
          </div>
        </div>
      </div>
      <!-- summary -->
    </div>
  </div>
</section>
<!-- cart + summary -->
@endsection
