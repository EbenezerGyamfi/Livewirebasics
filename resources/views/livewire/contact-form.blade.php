    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <form wire:submit.prevent='storecontact' method="post" ">

                                  @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            @endif

                            @csrf

                            <div class="form-group mb-4">
                                <label for="title">Title</label>
                                <input wire:model="title" type="text" class="form-control" id="title"
                                    name="title" placeholder="title">
                                @error('title')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="email" placeholder="Enter email">

                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">
                                Submit <div wire:loading wire:target='storecontact'><span  class="loader"></span></div></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
