<?php

namespace HelloVoisins\Repositories;

use HelloVoisins\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user=$user;
    }
    /**
     * Gets the users whith their skills
     *
     * @return collection
     */
    public static function queryWithSkills()
    {
        return User::orderBy('users.created_at', 'desc')->withCount(['skills'])
        ->get();
    }

    /**
     * Gets a user by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($user_id)
    {
        return User::find($user_id);
    }

    /**
     * Gets all users.
     *
     * @return mixed
     */
    public function all()
    {
        return User::all();
    }

    /**
     * Deletes a user.
     *
     * @param int
     */
    public function delete($user_id)
    {
        User::destroy($user_id);
    }

    /**
     * Updates a user.
     *
     * @param int
     * @param array
     */
    public function update($user_id, array $user_data)
    {
        //User::find($user_id)-&gt;update($user_data);
    }

    public static function getWithSkillsForSkill($skill)
    {
        //return self::queryWithSkills()
        $usersList = User::orderBy('users.created_at', 'desc');
        return $usersList
        ->whereHas('skills', function($q) use ($skill)
        {
            $q->where('skill.title', $skill);
        })
        ->get();
    }
}