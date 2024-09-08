<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  beds: 0,
  baths: 0,
  area: 0,
  city: null,
  street: null,
  code: null,
  street_nr: null,
  price: 0,
});
const create = () => form.post(route('listing.store'));
</script>

<template>
  <form @submit.prevent="create">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-2">
        <label class="label">Betten</label>
        <input class="input" v-model.number="form.beds" type="text" />
        <div class="input-error" v-if="form.errors.beds">
          {{ form.errors.beds }}
        </div>
        <div v-else>&nbsp;</div>
      </div>

      <div class="col-span-2">
        <label class="label">Badezimmer</label>
        <input class="input" v-model.number="form.baths" type="text" />
        <div class="input-error" v-if="form.errors.baths">
          {{ form.errors.baths }}
        </div>
        <div v-else>&nbsp;</div>
      </div>

      <div class="col-span-2">
        <label class="label">Größe</label>
        <input class="input" v-model.number="form.area" type="text" />
        <div class="input-error" v-if="form.errors.area">
          {{ form.errors.area }}
        </div>
        <div v-else>&nbsp;</div>
      </div>

      <div class="col-span-4">
        <label class="label">Ort</label>
        <input class="input" v-model="form.city" type="text" />
        <div class="input-error" v-if="form.errors.city">
          {{ form.errors.city }}
        </div>
        <div v-else>&nbsp;</div>
      </div>

      <div class="col-span-2">
        <label class="label">Postleitzahl</label>
        <input class="input" v-model="form.code" type="text" />
        <div class="input-error" v-if="form.errors.code">
          {{ form.errors.code }}
        </div>
        <div v-else>&nbsp;</div>
      </div>

      <div class="col-span-4">
        <label class="label">Straße</label>
        <input class="input" v-model="form.street" type="text" />
        <div class="input-error" v-if="form.errors.street">
          {{ form.errors.street }}
        </div>
        <div v-else>&nbsp;</div>
      </div>

      <div class="col-span-2">
        <label class="label">Hausnummer</label>
        <input class="input" v-model.number="form.street_nr" type="text" />
        <div class="input-error" v-if="form.errors.street_nr">
          {{ form.errors.street_nr }}
        </div>
        <div v-else>&nbsp;</div>
      </div>

      <div class="col-span-6">
        <label class="label">Preis</label>
        <input class="input" v-model.number="form.price" type="text" />
        <div class="input-error" v-if="form.errors.price">
          {{ form.errors.price }}
        </div>
        <div v-else>&nbsp;</div>
      </div>

      <div class="col-span-6">
        <button type="submit" class="btn-primary">Eintrag erstellen</button>
      </div>
    </div>
  </form>
</template>

<style scoped></style>
