import Vue from 'vue';
import Vuex from 'vuex';
import auth from './auth';
Vue.use(Vuex);
export default new Vuex.Store({
    state:{
        permission:null,
    },
    mutations:{
        setDataPermission(state,data){
            state.permission=data;
        }

    },
    actions:{
        setPermission({commit},data){
            commit('setDataPermission',data)
        }
    },
    modules:{
        auth
    }
});
