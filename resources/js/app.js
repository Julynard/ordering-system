/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import ProductList from './components/ProductList.vue';
app.component('ProductList', ProductList);

import ProductForm from './components/ProductForm.vue';
app.component('ProductForm', ProductForm);

app.mount('#app');
