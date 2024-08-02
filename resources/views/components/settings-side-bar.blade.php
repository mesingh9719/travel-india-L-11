<div class="card">
    <div class="card-header">
        <h4>Settings</h4>
    </div>
    <div class="card-body p-0">
        <ul class="list-group
                    ">
            <li class="list-group-item border-0">
                <a href="{{ route('admin.general-settings') }}" class="{{ request()->is('admin/general-settings') ? 'active' : '' }}">General Settings</a>
            </li>
            <li class="list-group-item border-0">
                <a href="{{ route('admin.email-settings.index') }}" class="{{ request()->is('admin/email-settings') ? 'active' : '' }}">Email Settings</a>
            </li>
            <li class="list-group-item border-0">
                <a href="{{ route('admin.payment-settings.index') }}" class="{{ request()->is('admin/payment-settings') ? 'active' : '' }}">Payment Settings</a>
            </li>
        </ul>
    </div>
</div>
