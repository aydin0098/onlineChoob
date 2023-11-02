<div>
    @include('livewire.home.includes.sliders')
    @include('livewire.home.includes.offer')
    @include('livewire.home.includes.most-seller')

    <section class="my-14 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <img class="rounded-2xl" src="{{asset('home/assets/images/pic.jpg')}}" alt="">
        </div>
    </section>

    @include('livewire.home.includes.new-products')

    <section class="my-14 px-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <img class="rounded-3xl" src="{{asset('home/assets/images/11.png')}}" alt="">
                </div>
                <div>
                    <img class="rounded-3xl" src="{{asset('home/assets/images/12.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    @include('livewire.home.includes.recommend-products')
    @include('livewire.home.includes.blog')


</div>
