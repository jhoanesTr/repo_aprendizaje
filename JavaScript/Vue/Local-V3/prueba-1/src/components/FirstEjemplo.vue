<template>
  <div>
    <div>Nombre: {{ nombre }}</div>
    <div>Experiencia: {{ experiencia }}</div>
    <div>Nivel: {{ nivel }}</div>
    <button @click="moreExp">Aumentar experiencia</button>
  </div>
</template>

<script>
export default {
  name: "FirstEjemplo",
  data(){
    return{
      nombre: "Jhoanes",
      experiencia: 1,
    }
  },
  computed:{
    nivel(){
      return this.experiencia > 12 ? "Experto"
          : this.experiencia > 8 ? "Senior"
          : this.experiencia > 4 ? "Medio"
          : "Junior"
    }
  },
  methods:{
    moreExp(){
      this.experiencia++;
    }
  }
}
</script>

<style scoped>

</style>