<x-home-layout>
    <div class="container my-5" id="gameRelease">
        <h5>
            Game Release
            <hr class="hr-danger container-fluid" />
        </h5>

        <div class="row">
            <div class="col-4 my-3">
                <a href="#">
                    <div class="card">
                        <img
                            src="/assets/images/city bus manager.jpg"
                            class="img-fluid rounded-1"
                            alt="..."
                        />
                    </div>
                </a>
            </div>

            <div class="col-4 my-3">
                <a href="#">
                    <div class="card">
                        <img
                            src="/assets/images/dishonored 2.jpg"
                            class="img-fluid rounded-1"
                            alt="..."
                        />
                    </div>
                </a>
            </div>

            <div class="col-4 my-3">
                <a href="#">
                    <div class="card">
                        <img
                            src="/assets/images/evil west.jpg"
                            class="img-fluid rounded-1"
                            alt="..."
                        />
                    </div>
                </a>
            </div>

            <div class="col-4 my-3">
                <a href="#">
                    <div class="card">
                        <img
                            src="/assets/images/marvel's spiderman.jpg"
                            class="img-fluid rounded-1"
                            alt="..."
                        />
                    </div>
                </a>
            </div>

            <div class="col-4 my-3">
                <a href="#">
                    <div class="card">
                        <img
                            src="/assets/images/high on life.jpg"
                            class="img-fluid rounded-1"
                            alt="..."
                        />
                    </div>
                </a>
            </div>

            <div class="col-4 my-3">
                <a href="#">
                    <div class="card">
                        <img
                            src="/assets/images/warzone.jpg"
                            class="img-fluid rounded-1"
                            alt="..."
                        />
                    </div>
                </a>
            </div>
        </div>

        <div class="container my-5" id="newRelease">
            <div class="row">
                <div class="col">
                    <h5>New Release</h5>
                </div>
                <div class="col-1">
                    <small id="hover">
                        <a href="{{ route('releases-list', ['title' => 'New Release']) }}"
                            >Browse All</a
                        >
                    </small>
                </div>
            </div>
            <div class="row">
                <hr class="hr-primary" />
            </div>

            <div class="row my-3">
                <div class="col-3">
                    <a href="#">
                        <img
                            src="/assets/images/dishonored 2.jpg"
                            class="img-thumbnail"
                            alt="..."
                        />
                        <div class="title">
                            <p>Dishonored 2</p>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="#">
                        <img
                            src="/assets/images/city bus manager.jpg"
                            class="img-thumbnail"
                            alt="..."
                        />
                        <div class="title">
                            <p>city bus manager</p>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="#">
                        <img
                            src="/assets/images/valorant.jpg"
                            class="img-thumbnail"
                            alt="..."
                        />
                        <div class="title">
                            <p>valorant</p>
                        </div>
                    </a>
                </div>

                <div class="col-3">
                    <a href="#">
                        <img
                            src="/assets/images/overwatch 2.jpg"
                            class="img-thumbnail"
                            alt="..."
                        />
                        <div class="title">
                            <p>overwatch 2</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5" id="bestSeller">
        <div class="row">
            <div class="col">
                <h5>best seller</h5>
            </div>
            <div class="col-1">
                <small id="hover">
                    <a href="{{ route('releases-list', ['title' => 'Best Seller']) }}">Browse All</a>
                </small>
            </div>
        </div>
        <div class="row">
            <hr class="hr-primary" />
        </div>

        <div class="row my-3">
            <div class="col-3">
                <a href="#">
                    <img
                        src="/assets/images/battlefield 5.jpg"
                        class="img-thumbnail"
                        alt="..."
                    />
                    <div class="title">
                        <p>battlefield 5</p>
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a href="#">
                    <img
                        src="/assets/images/evil west.jpg"
                        class="img-thumbnail"
                        alt="..."
                    />
                    <div class="title">
                        <p>evil west</p>
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a href="#">
                    <img
                        src="/assets/images/farcry6.jpg"
                        class="img-thumbnail"
                        alt="..."
                    />
                    <div class="title">
                        <p>farcry6</p>
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a href="#">
                    <img
                        src="/assets/images/fifa22.jpg"
                        class="img-thumbnail"
                        alt="..."
                    />
                    <div class="title">
                        <p>fifa22</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container my-5" id="comingSoon">
        <div class="row">
            <div class="col">
                <h5>coming Soon</h5>
            </div>
            <div class="col-1">
                <small id="hover">
                    <a href="{{ route('releases-list', ['title' => 'Coming Soon']) }}">Browse All</a>
                </small>
            </div>
        </div>
        <div class="row">
            <hr class="hr-primary" />
        </div>

        <div class="row my-3">
            <div class="col-3">
                <a href="#">
                    <img
                        src="/assets/images/football manager 2023.jpg"
                        class="img-thumbnail"
                        alt="..."
                    />
                    <div class="title">
                        <p>football manager 2023</p>
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a href="#">
                    <img
                        src="/assets/images/goat simulator 3.jpg"
                        class="img-thumbnail"
                        alt="..."
                    />
                    <div class="title">
                        <p>goat simulator 3</p>
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a href="#">
                    <img
                        src="/assets/images/hello neighbor 2.jpg"
                        class="img-thumbnail"
                        alt="..."
                    />
                    <div class="title">
                        <p>hello neighbor 2</p>
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a href="#">
                    <img
                        src="/assets/images/high on life.jpg"
                        class="img-thumbnail"
                        alt="..."
                    />
                    <div class="title">
                        <p>high on life</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container my-5" id="mostPlayed">
        <div class="row">
            <div class="col">
                <h5>most Played</h5>
            </div>
            <div class="col-1">
                <small id="hover">
                    <a href="{{ route('releases-list', ['title' => 'Most Played']) }}">Browse All</a>
                </small>
            </div>
        </div>
        <div class="row">
            <hr class="hr-primary" />
        </div>

        <div class="row my-3">
            <div class="col-3">
                <a href="#">
                    <img
                        src="/assets/images/just dance.jpg"
                        class="img-thumbnail"
                        alt="..."
                    />
                    <div class="title">
                        <p>just dance</p>
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a href="#">
                    <img
                        src="/assets/images/marvel's spiderman.jpg"
                        class="img-thumbnail"
                        alt="..."
                    />
                    <div class="title">
                        <p>marvel’s spider-man: miles morales</p>
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a href="#">
                    <img
                        src="/assets/images/marvin the martian.jpg"
                        class="img-thumbnail"
                        alt="..."
                    />
                    <div class="title">
                        <p>marvin the martian</p>
                    </div>
                </a>
            </div>

            <div class="col-3">
                <a href="#">
                    <img
                        src="/assets/images/overcooked 2.jpg"
                        class="img-thumbnail"
                        alt="..."
                    />
                    <div class="title">
                        <p>overcooked 2</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-home-layout>
