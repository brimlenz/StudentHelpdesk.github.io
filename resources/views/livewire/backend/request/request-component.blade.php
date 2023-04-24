<div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Submit a request</h4>

        <div class="row">
            <!-- Basic -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <form action="" wire:submit.prevent='submitRequest'>
                            <div class="mt-2">
                                <label class="form-label" for="basic-default-password12">Subject</label>
                                <div class="input-group ">
                                    <input type="text"
                                        class="form-control @error('subject') border border-danger @enderror"
                                        placeholder="Enter your subject" wire:model='subject' />
                                </div>

                                @error('subject')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="mt-3">
                                <label class="form-label" for="basic-default-password12">Description</label>
                                <div class="form-floating">
                                    <textarea class="form-control @error('description') border border-danger @enderror" id="floatingTextarea2"
                                        style="height: 100px" wire:model='description'></textarea>
                                    <label for="floatingTextarea2">Please describe your concern as much as possible. The
                                        more details you provide, the better we can assist you.</label>
                                </div>

                                @error('description')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="formFile" class="form-label">Screenshot Attachments</label>
                                <input class="form-control" type="file" multiple id="formFile" wire:model='images'>

                                <div wire:loading wire:target="images">
                                    Uploading wait...
                                </div>

                                @if ($images)
                                    Photo Preview:
                                    @foreach ($images as $img)
                                        <img src="{{ $img->temporaryUrl() }}" class="img-thumbnail" alt="..."
                                            style="height: 100px">
                                    @endforeach
                                @endif

                            </div>



                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- / Content -->
</div>
