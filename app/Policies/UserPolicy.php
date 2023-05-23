<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user): bool
    {
        if ($user->can('ver_usuarios')) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user): bool
    {
        if ($user->can('ver_usuarios')) {
            return true;
        }
    }

    /**
     * Determine whether the user can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): bool
    {
        if ($user->can('editar_usuarios')) {
            return true;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user): bool
    {
        if ($user->can('editar_usuarios')) {
            return true;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user): bool
    {
        if ($user->can('deletar_usuarios')) {
            return true;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user): bool
    {
        if ($user->can('deletar_usuarios')) {
            return true;
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user): bool
    {
        if ($user->can('deletar_usuarios')) {
            return true;
        }
    }
}
