<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><?= $this->Html->link(__('Doctors'), ['controller' => 'doctors', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Hospitals'), ['controller' => 'hospitals', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Appointments'), ['controller' => 'appointments', 'action' => 'index']) ?></li>
            </ul>
        </div>
    </div>
</nav>