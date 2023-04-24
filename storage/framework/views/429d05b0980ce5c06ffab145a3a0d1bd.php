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
                                        class="form-control <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        placeholder="Enter your subject" wire:model='subject' />
                                </div>

                                <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>


                            <div class="mt-3">
                                <label class="form-label" for="basic-default-password12">Description</label>
                                <div class="form-floating">
                                    <textarea class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="floatingTextarea2"
                                        style="height: 100px" wire:model='description'></textarea>
                                    <label for="floatingTextarea2">Please describe your concern as much as possible. The
                                        more details you provide, the better we can assist you.</label>
                                </div>

                                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="formFile" class="form-label">Screenshot Attachments</label>
                                <input class="form-control" type="file" multiple id="formFile" wire:model='images'>

                                <div wire:loading wire:target="images">
                                    Uploading wait...
                                </div>

                                <?php if($images): ?>
                                    Photo Preview:
                                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <img src="<?php echo e($img->temporaryUrl()); ?>" class="img-thumbnail" alt="..."
                                            style="height: 100px">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

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
<?php /**PATH C:\xampp\htdocs\StudentHelpDesk\resources\views/livewire/backend/request/request-component.blade.php ENDPATH**/ ?>