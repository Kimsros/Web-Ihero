import axios from 'axios';
export default {
    namespaced: true,
    state: {
        user: null,
        isLogin: false
    },
    getters: {
        authenticated(state) {
            return state.isLogin;
        },
        getUser(state) {
            return state.user;
        }
    },
    mutations: {
        SET_USER(state, user) {
            state.user = user;
        },
        SET_LOGIN(state, login) {
            state.isLogin = login;
        }
    },
    actions: {
        async Init({ dispatch }) {
            let response = await axios.get("/api/user-auth");
            if (response.data.status == "failed") {
                return false;
            } else {
                dispatch('attempt', response.data);
                return true;
            }
        },
        SignOut({ commit }) {
            commit('SET_USER', null);
            commit('SET_LOGIN', false);
        },
        async SignIn({ dispatch }, credentials) {
            let response = await axios.post("/api/login", credentials);
            if (response.data == "") {
                return ["error", "Invalid Email or Password"];
            } else {
               dispatch('attempt', response.data);
                return ["success", response.data];
            }
        },
       async SignInFront({ dispatch }, credentials) {
            const response = await axios.post("/api/login", credentials);
            if (response.data == "") {
                return ["error", "Invalid Email or Password"];
            } else if(response.data.error == "InvalidEmail"){
                return ["error", "Invalid Email !"];
            } else if (response.data.error == "InvalidPassword") {
                return ["error", "Invalid Password !"];
            } else {
                dispatch('attempt', response.data);
                return ["success", response.data];
            }

        },
        async attempt({ commit }, user) {
            commit('SET_USER', user);
            commit('SET_LOGIN', true);
        }
    }
};
