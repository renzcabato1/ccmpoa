<div id="change-cover-modal" class="modal change-cover-modal is-medium has-light-bg">
    <div class="modal-background"></div>
    <div class="modal-content">

        <div class="card">
            <div class="card-heading">
                <h3>Update Cover</h3>
                <!-- Close X button -->
                <div class="close-wrap">
                    <span class="close-modal">
                            <i data-feather="x"></i>
                        </span>
                </div>
            </div>
            <div class="card-body">
                <!-- Placeholder -->
                <div class="selection-placeholder">
                    <div class="columns">
                        <div class="column is-6">
                            <!-- Selection box -->
                            <div class="selection-box modal-trigger" data-modal="upload-crop-cover-modal">
                                <div class="box-content">
                                    <img src="{{ asset('assets/img/illustrations/profile/upload-cover.svg') }}" alt="">
                                    <div class="box-text">
                                        <span>Upload</span>
                                        <span>From your computer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <!-- Selection box -->
                            <div class="selection-box modal-trigger" data-modal="user-photos-modal">
                                <div class="box-content">
                                    <img src="{{ asset('assets/img/illustrations/profile/change-cover.svg') }}" alt="">
                                    <div class="box-text">
                                        <span>Choose</span>
                                        <span>From your photos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>