<script>
document.addEventListener('DOMContentLoaded', () => {
    const hamburgerButton = document.getElementById('hamburger-button');
    const closeDrawerButton = document.getElementById('close-drawer');
    const backdrop = document.getElementById('backdrop');
    const mobileDrawer = document.getElementById('mobile-drawer');

    const toggleDrawer = () => {
        mobileDrawer.classList.toggle('hidden');
        document.body.style.overflow = mobileDrawer.classList.contains('hidden') ? '' : 'hidden';
        if (!mobileDrawer.classList.contains('hidden')) {
            // Reset any open submenus when drawer opens
            mobileDrawer.querySelectorAll('.space-y-2 > div').forEach(submenu => {
                submenu.classList.add('hidden');
            });
            // Focus search input when drawer opens
            setTimeout(() => {
                mobileDrawer.querySelector('input[type="text"]').focus();
            }, 100);
        }
    };

    hamburgerButton.addEventListener('click', toggleDrawer);
    closeDrawerButton.addEventListener('click', toggleDrawer);
    backdrop.addEventListener('click', toggleDrawer);
    // Close drawer on Escape key
    document.addEventListener('keydown', e => e.key === 'Escape' && !mobileDrawer.classList.contains('hidden') && toggleDrawer());
});
</script>
