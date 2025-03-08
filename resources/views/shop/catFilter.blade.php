@extends('layouts.shop')

@push('styles')
<style>
/* Custom scrollbar for sidebar */
.overflow-y-auto::-webkit-scrollbar {
    width: 4px;
}

.overflow-y-auto::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.overflow-y-auto::-webkit-scrollbar-thumb {
    background: #006633;
    border-radius: 2px;
}

.overflow-y-auto::-webkit-scrollbar-thumb:hover {
    background: #005528;
}
</style>
@endpush

@section('content')
    <livewire:product-catalog-component />
@endsection

@push('scripts')
<script>
// Any additional JS needed
document.addEventListener('livewire:load', function () {
    // Listen for Livewire events if needed
    Livewire.on('categoryChanged', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
</script>
@endpush
