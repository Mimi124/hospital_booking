<?php

namespace App\Policies;

use App\Models\DiagnosisCategory;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DiagnosisCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DiagnosisCategory  $diagnosisCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, DiagnosisCategory $diagnosisCategory)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DiagnosisCategory  $diagnosisCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, DiagnosisCategory $diagnosisCategory)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DiagnosisCategory  $diagnosisCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, DiagnosisCategory $diagnosisCategory)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DiagnosisCategory  $diagnosisCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, DiagnosisCategory $diagnosisCategory)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\DiagnosisCategory  $diagnosisCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, DiagnosisCategory $diagnosisCategory)
    {
        //
    }
}
