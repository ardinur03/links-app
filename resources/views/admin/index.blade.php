<x-app-layout>
    <div class="row">
        <div class="col-12">
            <h2 class="content-title">Statistics</h2>
            <h5 class="content-desc mb-4">Your business growth</h5>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="statistics-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column justify-content-between align-items-start">
                        <h5 class="content-desc">Users</h5>

                        <h3 class="statistics-value">{{ $users_count }}</h3>
                    </div>
                    <a href="{{ route('users.index') }}" class="btn-statistics">
                        <img src="{{ asset('assets/images/icon/times.svg') }}" alt="">
                    </a>
                </div>

                <div class="statistics-list">
                    <img class="statistics-image" src="{{ asset('assets/images/photo/photo.png') }}" alt="photo">
                    <img class="statistics-image" src="{{ asset('assets/images/photo/photo.png') }}" alt="photo">
                    <img class="statistics-image" src="{{ asset('assets/images/photo/photo.png') }}" alt="photo">
                    <img class="statistics-image" src="{{ asset('assets/images/photo/photo.png') }}" alt="photo">
                    <img class="statistics-image" src="{{ asset('assets/images/photo/photo.png') }}" alt="photo">
                    <img class="statistics-image" src="{{ asset('assets/images/photo/photo.png') }}" alt="photo">
                    <img class="statistics-image" src="{{ asset('assets/images/photo/photo.png') }}" alt="photo">
                </div>

            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="statistics-card">

                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column justify-content-between align-items-start">
                        <h5 class="content-desc">Teams</h5>

                        <h3 class="statistics-value">122,000</h3>
                    </div>

                    <button class="btn-statistics">
                        <img src="{{ asset('assets/images/icon/times.svg') }}" alt="">
                    </button>
                </div>

                <div class="statistics-list">
                    {{-- <div class="statistics-icon award">
                        <img src="./assets/img/home/team/award.svg" alt="">
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="statistics-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column justify-content-between align-items-start">
                        <h5 class="content-desc">Links User</h5>
                        <h3 class="statistics-value">{{ $links }}</h3>
                    </div>
                    <button class="btn-statistics">
                        <img src="{{ asset('assets/images/icon/times.svg') }}" alt="">
                    </button>
                </div>

                <div class="statistics-list">
                    <div class="statistics-icon one">
                        <span>SK</span>
                    </div>
                    <div class="statistics-icon two">
                        <span>DW</span>
                    </div>
                    <div class="statistics-icon three">
                        <span>FJ</span>
                    </div>
                    <div class="statistics-icon four">
                        <span>AP</span>
                    </div>
                    <div class="statistics-icon five">
                        <span>ML</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 col-lg-6">
            <h2 class="content-title">Review</h2>
            <h5 class="content-desc mb-4">All Review</h5>

            <div class="document-card">
                <div class="document-item">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="document-icon box">
                            {{-- <img src="./assets/img/home/document/archive.svg" alt=""> --}}
                        </div>
                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <h2 class="document-title">Customer Guide</h2>
                            <span class="document-desc">180 MB • PDF</span>
                        </div>
                    </div>
                    <button class="btn-statistics">
                        {{-- <img src="./assets/img/global/download.svg" alt=""> --}}
                    </button>

                </div>

                <div class="document-item">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="document-icon globe">
                            {{-- <img src="./assets/img/home/document/twitch.svg" alt=""> --}}
                        </div>
                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <h2 class="document-title">Twitch Record</h2>

                            <span class="document-desc">700 GB • MP4</span>
                        </div>
                    </div>
                    <button class="btn-statistics">
                        {{-- <img src="./assets/img/global/download.svg" alt=""> --}}
                    </button>
                </div>
                <div class="document-item">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="document-icon database">
                            {{-- <img src="./assets/img/home/document/database.svg" alt=""> --}}
                        </div>
                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <h2 class="document-title">Personas Datasets</h2>
                            <span class="document-desc">11 MB • CSV</span>
                        </div>
                    </div>
                    <button class="btn-statistics">
                        {{-- <img src="./assets/img/global/download.svg" alt=""> --}}
                    </button>
                </div>
                <div class="document-item">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="document-icon target">
                            {{-- <img src="./assets/img/home/document/book-open.svg" alt=""> --}}
                        </div>
                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <h2 class="document-title">Marketing Book</h2>
                            <span class="document-desc">891 MB • PDF</span>
                        </div>
                    </div>
                    <button class="btn-statistics">
                        <img src="./assets/img/global/download.svg" alt="">
                    </button>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <h2 class="content-title">History</h2>
            <h5 class="content-desc mb-4">Track the flow</h5>
            <div class="document-card">
                <div class="document-item">
                    <div class="d-flex justify-content-start align-items-center">
                        {{-- <img class="document-icon" src="./assets/img/home/history/photo.png" alt=""> --}}
                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <h2 class="document-title">Amalia Syahrina</h2>
                            <span class="document-desc">Promoted to Sr. Website Designer</span>
                        </div>
                    </div>
                </div>

                <div class="document-item">
                    <div class="d-flex justify-content-start align-items-center">
                        {{-- <img class="document-icon" src="./assets/img/home/history/photo-1.png" alt=""> --}}

                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <h2 class="document-title">Ah Park Yo</h2>

                            <span class="document-desc">Promoted to Front-End Developer</span>
                        </div>
                    </div>
                </div>

                <div class="document-item">
                    <div class="d-flex justify-content-start align-items-center">
                        {{-- <img class="document-icon" src="./assets/img/home/history/photo-2.png" alt=""> --}}

                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <h2 class="document-title">Sintia Siny</h2>

                            <span class="document-desc">Promoted to Accounting Executive</span>
                        </div>
                    </div>
                </div>

                <div class="document-item">
                    <div class="d-flex justify-content-start align-items-center">
                        {{-- <img class="document-icon" src="./assets/img/home/history/photo-3.png" alt=""> --}}

                        <div class="d-flex flex-column justify-content-between align-items-start">
                            <h2 class="document-title">Jerami Putu</h2>

                            <span class="document-desc">Promoted to Quality Manager</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
