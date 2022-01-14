<div id="fh5co-contact" class="fh5co-section-gray">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    <div class="container">
        <form wire:submit.prevent="store">
            @csrf
            <div class="row animate-box">
                <div class="col-md-6">
                    <h3 class="section-title">Review</h3>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-8">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject"
                                    wire:model.defer="subject">
                                @error('subject') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-8">
                            <div class="form-group">
                                <textarea class="form-control" id="" cols="30" rows="7" placeholder="Review"
                                    wire:model.defer="review"></textarea>
                                @error('review') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12 col-sm-8">
                            <div class="form-group">
                                @error('rate') <span class="text-danger">{{$message}}</span>@enderror
                                <h3>Your Rating</h3>
                                <div class="rating">
                                    <input type="radio" wire:model.defer="rate" value="5" id="5" name="rating"><label
                                        for="5">☆</label>
                                    <input type="radio" wire:model.defer="rate" value="4" id="4" name="rating"><label
                                        for="4">☆</label>
                                    <input type="radio" wire:model.defer="rate" value="3" id="3" name="rating"><label
                                        for="3">☆</label>
                                    <input type="radio" wire:model.defer="rate" value="2" id="2" name="rating"><label
                                        for="2">☆</label>
                                    <input type="radio" wire:model.defer="rate" value="1" id="1" name="rating"><label
                                        for="1">☆</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-8">
                            <div class="form-group">
                                @auth
                                <input type="submit" value="Rate" class="btn btn-primary">
                                @else
                                <button class="btn btn-primary"><a href="/login" style="color:white;">Sign in to submit
                                        review</a></button>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@livewireScripts
