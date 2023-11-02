<!DOCTYPE html>
<html lang="en" dir="rtl">
@include('livewire.home.layouts.head')
<body class="bg-slate-50 font-YekanBakh-Regular text-sm">

@include('livewire.home.layouts.header')

{{$slot}}

@include('livewire.home.layouts.footer')

<footer class="footer footer-center p-4 bg-stone-700 text-white">
    <div>
        <p>Copyright © 2023 - تمامی حقوق برای راست چین محفوظ می باشد</p>
    </div>
</footer>
@include('livewire.home.layouts.scripts')
</body>
</html>
