<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
  listing: Object,
});

const form = useForm({
  beds: props.listing.beds,
  baths: props.listing.baths,
  area: props.listing.area,
  city: props.listing.city,
  street: props.listing.street,
  code: props.listing.code,
  street_nr: props.listing.street_nr,
  price: props.listing.price,
});
const update = () =>
  form.put(route('listing.update', { listing: props.listing.id }));
</script>

<template>
  <form @submit.prevent="update">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-2">
        <label class="label">Betten</label>
        <input class="input" v-model.number="form.beds" type="text" />
        <div class="input-error" v-if="form.errors.beds">
          {{ form.errors.beds }}
        </div>
        <div class="input-error" v-else>&nbsp;</div>
      </div>

      <div class="col-span-2">
        <label class="label">Badezimmer</label>
        <input class="input" v-model.number="form.baths" type="text" />
        <div class="input-error" v-if="form.errors.baths">
          {{ form.errors.baths }}
        </div>
        <div class="input-error" v-else>&nbsp;</div>
      </div>

      <div class="col-span-2">
        <label class="label">Größe</label>
        <input class="input" v-model.number="form.area" type="text" />
        <div class="input-error" v-if="form.errors.area">
          {{ form.errors.area }}
        </div>
        <div class="input-error" v-else>&nbsp;</div>
      </div>

      <div class="col-span-4">
        <label class="label">Ort</label>
        <input class="input" v-model="form.city" type="text" />
        <div class="input-error" v-if="form.errors.city">
          {{ form.errors.city }}
        </div>
        <div class="input-error" v-else>&nbsp;</div>
      </div>

      <div class="col-span-2">
        <label class="label">Postleitzahl</label>
        <input class="input" v-model="form.code" type="text" />
        <div class="input-error" v-if="form.errors.code">
          {{ form.errors.code }}
        </div>
        <div class="input-error" v-else>&nbsp;</div>
      </div>

      <div class="col-span-4">
        <label class="label">Straße</label>
        <input class="input" v-model="form.street" type="text" />
        <div class="input-error" v-if="form.errors.street">
          {{ form.errors.street }}
        </div>
        <div class="input-error" v-else>&nbsp;</div>
      </div>

      <div class="col-span-2">
        <label class="label">Hausnummer</label>
        <input class="input" v-model.number="form.street_nr" type="text" />
        <div class="input-error" v-if="form.errors.street_nr">
          {{ form.errors.street_nr }}
        </div>
        <div class="input-error" v-else>&nbsp;</div>
      </div>

      <div class="col-span-6">
        <label class="label">Preis</label>
        <input class="input" v-model.number="form.price" type="text" />
        <div class="input-error" v-if="form.errors.price">
          {{ form.errors.price }}
        </div>
        <div class="input-error" v-else>&nbsp;</div>
      </div>

      <div class="col-span-6">
        <button type="submit" class="btn-primary">Änderungen übernehmen</button>
      </div>
    </div>
  </form>
</template>

<style scoped></style>
