<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Modal elements
        const loginBtn = document.getElementById('login-btn');
        const loginModal = document.getElementById('loginModal');
        const closeBtn = document.getElementById('login-modal-close');
        const modalBackdrop = document.getElementById('modal-backdrop');

        // Show modal if there are validation errors
        @if ($errors->has('email') || $errors->has('password'))
            if (loginModal) {
                loginModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        @endif

        // Only set up event listeners if elements exist
        if (loginBtn && loginModal) {
            // Show modal
            loginBtn.addEventListener('click', function() {
                loginModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
            });
        }

        if (closeBtn && modalBackdrop) {
            // Hide modal
            function closeModal() {
                loginModal.classList.add('hidden');
                document.body.style.overflow = ''; // Re-enable scrolling
            }

            closeBtn.addEventListener('click', closeModal);
            modalBackdrop.addEventListener('click', closeModal);

            // Close modal with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !loginModal.classList.contains('hidden')) {
                    closeModal();
                }
            });
        }
    });
</script>