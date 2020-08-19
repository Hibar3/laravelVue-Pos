<template>
  <div>
  <h1>POS</h1>
  <h3>Cashier</h3>
  <div>
    <b-table-simple :borderless="borderless" :items="items">
    <b-thead head-variant="dark">
      <b-tr>
        <b-th colspan="2">Products</b-th>
        <b-th colspan="3">Price(RM)</b-th>
        <b-th colspan="2">Quantity</b-th>
        <b-th colspan="2">Cost(RM)</b-th>
      </b-tr>
     
    </b-thead>
    <b-tbody>
      <b-tr v-for="product in items" v-bind:key="product">
        <b-th colspan="3">{{product.product}}</b-th>
        
        <b-td colspan='2'>{{product.price}}</b-td>
        <b-td colspan='2'> 
          <b-button pill>-</b-button>  
          {{product.quantity}}
          <b-button pill variant="primary">+</b-button
        ></b-td>
       
        <b-td variant="success">{{product.cost}}</b-td>
      </b-tr>
    </b-tbody>
    <b-tfoot>
      <b-tr>
        <b-td colspan="7" variant="secondary" class="text-right">
          Total Rows: <b>5</b>
        </b-td>
      </b-tr>
    </b-tfoot>
    
    </b-table-simple>
  </div>
   <b-button pill>- </b-button>
  <b-button pill variant="primary">+ </b-button>
    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
      <b-form-group
        id="input-group-1"
        label="Email address:"
        label-for="input-1"
        description="We'll never share your email with anyone else."
      >
        <b-form-input
          id="input-1"
          v-model="form.email"
          type="email"
          required
          placeholder="Enter email"
        ></b-form-input>
      </b-form-group>

      <b-form-group id="input-group-2" label="Your Name:" label-for="input-2">
        <b-form-input
          id="input-2"
          v-model="form.name"
          required
          placeholder="Enter name"
        ></b-form-input>
      </b-form-group>

      <b-form-group id="input-group-3" label="Food:" label-for="input-3">
        <b-form-select
          id="input-3"
          v-model="form.food"
          :options="foods"
          required
        ></b-form-select>
      </b-form-group>

      <b-form-group id="input-group-4">
        <b-form-checkbox-group v-model="form.checked" id="checkboxes-4">
          <b-form-checkbox value="me">Check me out</b-form-checkbox>
          <b-form-checkbox value="that">Check that out</b-form-checkbox>
        </b-form-checkbox-group>
      </b-form-group>

       <b-button type="reset" variant="danger">Cancel</b-button>
      <b-button type="submit" variant="primary">Check Out</b-button>
    </b-form>
    <b-card class="mt-3" header="Form Data Result">
      <pre class="m-0">{{ form }}</pre>
    </b-card>
  </div>
</template>

<script>
  export default {
    data() {
      return {
         // Note `isActive` is left out and will not appear in the rendered table
        fields: ['product', 'price', 'quantity', 'cost' ],
         items: [
          { product: 'Apple', price: 3, quantity: 1, cost: 3 },
          { product: 'Banana', price: 4, quantity: 1, cost: 4 },
          { product: 'shit', price: 5, quantity: 2, cost: 10 },
          { product: 'Kitkat', price: 6, quantity: 3, cost: 12 }
        ],

        orders: {
          product: '',
          price: '',
          quantity: '',
          total_unit_cost: '',
          subtotal: '',
          no_items: '',
          tax: '',
          service_charge: '',
          total: ''
        },
        form: {
          email: '',
          name: '',
          food: null,
          checked: []
        },
        foods: [{ text: 'Select One', value: null }, 'Carrots', 'Beans', 'Tomatoes', 'Corn'],
        show: true
      }
    },
    methods: {
      onSubmit(evt) {
        evt.preventDefault()
        alert(JSON.stringify(this.form))
      },
      onReset(evt) {
        evt.preventDefault()
        // Reset our form values
        this.form.email = ''
        this.form.name = ''
        this.form.food = null
        this.form.checked = []
        // Trick to reset/clear native browser form validation state
        this.show = false
        this.$nextTick(() => {
          this.show = true
        })
      }
    }
  }
</script>