<template>
  <nav class="navbar has-shadow has-background-light">
    <div class="container is-widescreen">
      <div class="navbar-brand">
        <a class="navbar-item brand-text" href="../">
          <img alt="Lamdai" src="./../assets/logo.png">
        </a>
        <div class="navbar-burger burger" data-target="navMenu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div id="navMenu" class="navbar-menu">
        <div class="navbar-start">
          <router-link to="/order/list" class="navbar-item is-tab is-hidden-mobile">
            Order
          </router-link>
          <router-link class="navbar-item is-tab is-hidden-mobile" to="/board/farm">
            Farm
          </router-link>
          <b-dropdown>
            <a class="navbar-item is-tab is-hidden-mobile" slot="trigger">
              <span>Unit</span>
              <b-icon icon="menu-down"></b-icon>
            </a>
            <b-dropdown-item has-link>
              <router-link to="/board/unit">Board Unit</router-link>
            </b-dropdown-item>
            <b-dropdown-item has-link>
              <router-link to="/assignments">Assignments</router-link>
            </b-dropdown-item>
            <b-dropdown-item has-link>
              <router-link to="/reports">Reports</router-link>
            </b-dropdown-item>
            <b-dropdown-item has-link>
              <router-link to="/greenhousess">Green House</router-link>
            </b-dropdown-item>
          </b-dropdown>
          <b-dropdown>
            <a class="navbar-item is-tab is-hidden-mobile" slot="trigger">
              <span>Production</span>
              <b-icon icon="menu-down"></b-icon>
            </a>
            <b-dropdown-item>
              Sown
            </b-dropdown-item>
            <b-dropdown-item>
              Harvest
            </b-dropdown-item>
          </b-dropdown>
          <b-dropdown>
            <a class="navbar-item is-tab is-hidden-mobile" slot="trigger">
              <span>System</span>
              <b-icon icon="menu-down"></b-icon>
            </a>
            <b-dropdown-item has-link>
              <router-link to="/user">User</router-link>
            </b-dropdown-item>
            <b-dropdown-item has-link>
              <router-link to="/role">Role</router-link>
            </b-dropdown-item>
            <b-dropdown-item has-link>
              <router-link to="/farm">Farm</router-link>
            </b-dropdown-item>
            <b-dropdown-item has-link>
              <router-link to="/customer">Customer</router-link>
            </b-dropdown-item>
            <b-dropdown-item has-link>
              <router-link to="/crop">Crop</router-link>
            </b-dropdown-item>
            <b-dropdown-item has-link>
              <router-link to="/variety">Variety</router-link>
            </b-dropdown-item>
          </b-dropdown>
        </div>
      </div>
      <div class="right-menu">
        <el-dropdown class="avatar-container right-menu-item" trigger="click">
            <div class="avatar-wrapper">
                <img src="./../assets/avatar.jpg" class="user-avatar"/>
                <i class="el-icon-caret-bottom"/>
            </div>
            <el-dropdown-menu slot="dropdown">
              <router-link to="/">
                <el-dropdown-item>
                  {{ $t('modules.user.profile') }}
                </el-dropdown-item>
              </router-link>
              <el-dropdown-item divided>
                <span style="display:block;" @click="logout">{{$t('html.logout.title')}}</span>
              </el-dropdown-item>
            </el-dropdown-menu>
          </el-dropdown>
      </div>
    </div>
  </nav>
</template>
<script>
import { NAMES as ACTION_NAMES } from "./../store/modules/auth/actions";
export default {
  methods: {
    logout() {
      this.$store.dispatch(ACTION_NAMES.LOGOUT).then(() => {
        location.reload();
      });
    }
  }
};
</script>