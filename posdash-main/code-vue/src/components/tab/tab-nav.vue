<template>
  <ul :class="`nav nav-${pills ? 'pills' : ''}${tabs ? 'tabs' : ''} ${vertical ? 'flex-column' : ''} ${align ? 'justify-content-'+align : ''}`+' '+extraclass " :id="id" :role="role" :aria-orientation="aria">
    <slot />
  </ul>
</template>
<!-- <script>
import Tab from 'bootstrap/js/src/tab'
export default {
  name: 'tab-nav',
  props: {
    id: { type: String, default: 'myTab' },
    pills: { type: Boolean, default: false },
    vertical: { type: Boolean, default: false },
    tabs: { type: Boolean, default: false },
    align: { type: String, default: '' },
    extraclass:{ type: String, default: '' },
    role:{ type: String, default: '' },
    aria:{ type: String, default: '' },
    
  },
  mounted () {
    var triggerTabList = [].slice.call(document.querySelectorAll(`#${this.id} a`))
    triggerTabList.forEach(function (triggerEl) {
      var tabTrigger = new Tab(triggerEl)

      triggerEl.addEventListener('click', function (e) {
        e.preventDefault()
        tabTrigger.show()
      })
    })
  }

}
</script> -->
<script>
export default {
  name: 'tab-nav',
  props: {
    id: { type: String, default: 'myTab' },
    pills: { type: Boolean, default: false },
    vertical: { type: Boolean, default: false },
    tabs: { type: Boolean, default: false },
    align: { type: String, default: '' },
    extraclass:{ type: String, default: '' },
    role:{ type: String, default: '' },
    aria:{ type: String, default: '' },
    
  },
  mounted () {
    let _this = this
    window.$('#' + this.id + ' a').on('click', function () {
      window.$(this).tab('show')
    })
    window.$('#' + this.id + ' a').on('shown.bs.tab', function (event) {
      _this.$emit('change', event)
    })
  }
}
</script>