<style>
    body {
        margin: 0;
        padding-bottom: 100px; /* Adjust to footer height */
    }

    footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 80px; /* Set height if needed */
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 20px 0;
        z-index: 1000;
    }

    .table-container {
        max-height: 100vh;
        overflow-y: auto;
    }
</style>

<footer class="bg-dark text-white text-center py-4 mt-auto">
    <p class="mb-1">{{ $foot }}</p>
    <small>&copy; {{ date('Y') }} Your Company. All rights reserved.</small>
</footer>
