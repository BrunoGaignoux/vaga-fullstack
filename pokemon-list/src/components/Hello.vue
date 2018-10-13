<template>
  <div id="hello">
    <b-container class="bv-example-row">
      <b-row>
        <b-col></b-col>
        <b-col cols="8">
          <b-card :header="msg" header-tag="header" tag="article" style="width: 100%;" class="mb-2">
            <b-table hover :items="gridData" :fields="fields"></b-table>
          </b-card>
        </b-col>
        <b-col></b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
export default {
  name: 'hello',
  props: {
      name: {
        type: String
      },
      type: {
        type: String
      },
      stat_total: {
        type: BigInt
      }
  },
  data: function() {
    return {
      msg: 'Lista de Lutadores da Arena',
      fields: [
          {
              key: 'name',
              sortable: true
          },
          {
              key: 'type',
              sortable: true
          },
          {
              key: 'stat_total',
              sortable: true
          }],
      gridData: [
          { isActive: false, name: 'Chuck Norris', type: 'Killer' , stat_total: Infinity },
          { isActive: false, name: 'Bruce Lee', type: 'Fighter' , stat_total: 9000 },
          { isActive: false, name: 'Jackie Chan', type: 'Fighter' , stat_total: 7000 },
          { isActive: false, name: 'Jet Li', type: 'Fighter' , stat_total: 8000 }
      ]
    }
  },
  computed: {
    filteredData: function () {
        var sortKey = this.sortKey
        var filterKey = this.filterKey && this.filterKey.toLowerCase()
        var order = this.sortOrders[sortKey] || 1
        var data = this.data
        if (filterKey) {
            data = data.filter(function (row) {
                return Object.keys(row).some(function (key) {
                    return String(row[key]).toLowerCase().indexOf(filterKey) > -1
                })
            })
        }
        if (sortKey) {
            data = data.slice().sort(function (a, b) {
                a = a[sortKey]
                b = b[sortKey]
                return (a === b ? 0 : a > b ? 1 : -1) * order
            })
        }
        return data
    }
  },
  filters: {
    capitalize: function (str) {
        return str.charAt(0).toUpperCase() + str.slice(1)
    }
  },
  methods: {
    sortBy: function (key) {
        this.sortKey = key
        this.sortOrders[key] = this.sortOrders[key] * -1
    }
  }
}
</script>

<style scoped>
#hello {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
