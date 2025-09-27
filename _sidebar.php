<!-- Admin/Service Sidebar (for internal pages) -->
<div class="sidebar bg-light border-end" style="min-height: calc(100vh - 76px);">
    <div class="p-3">
        <h6 class="text-uppercase text-muted mb-3">Quick Actions</h6>
        <div class="list-group list-group-flush">
            <a href="javascript:void(0)" onclick="bookFreeDemo()" class="list-group-item list-group-item-action">
                <i class="bi bi-calendar-check me-2"></i>Book Free Demo
            </a>
            <a href="javascript:void(0)" onclick="scheduleService()" class="list-group-item list-group-item-action">
                <i class="bi bi-tools me-2"></i>Schedule Service
            </a>
            <a href="javascript:void(0)" onclick="checkAMC()" class="list-group-item list-group-item-action">
                <i class="bi bi-shield-check me-2"></i>Check AMC Status
            </a>
            <a href="tel:<?php echo BUSINESS_PHONE; ?>" class="list-group-item list-group-item-action">
                <i class="bi bi-telephone me-2"></i>Call Support
            </a>
            <a href="https://wa.me/<?php echo BUSINESS_WHATSAPP; ?>" target="_blank" class="list-group-item list-group-item-action">
                <i class="bi bi-whatsapp me-2"></i>WhatsApp Chat
            </a>
        </div>

        <hr>

        <h6 class="text-uppercase text-muted mb-3">Popular Products</h6>
        <div class="popular-products">
            <div class="card mb-2">
                <div class="card-body p-2">
                    <h6 class="card-title fs-7 mb-1">Aquaguard Aura 2X Life</h6>
                    <p class="card-text small text-muted mb-1">RO + UV with Copper</p>
                    <span class="badge bg-primary">₹15,999</span>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body p-2">
                    <h6 class="card-title fs-7 mb-1">Aquaguard Blaze Insta</h6>
                    <p class="card-text small text-muted mb-1">Hot & Ambient Water</p>
                    <span class="badge bg-primary">₹22,999</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-2">
                    <h6 class="card-title fs-7 mb-1">Aquaguard Marvel NXT</h6>
                    <p class="card-text small text-muted mb-1">Smart IoT Technology</p>
                    <span class="badge bg-primary">₹18,999</span>
                </div>
            </div>
        </div>

        <div class="mt-4 text-center">
            <button class="btn btn-outline-primary btn-sm w-100" onclick="viewAllProducts()">
                <i class="bi bi-eye"></i> View All Products
            </button>
        </div>
    </div>
</div>
