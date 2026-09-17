<?php

Schema::create('bookings', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email');
    $table->string('room_type');
    $table->date('check_in');
    $table->date('check_out');
    $table->string('status')->default('pending');
    $table->timestamps();
});
