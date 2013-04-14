<?php
/**
 * Part of the Joomla Framework Github Package
 *
 * @copyright  Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Github\Package\Activity;

use Joomla\Github\Package;

/**
 * GitHub API Activity Events class for the Joomla Platform.
 *
 * @documentation http://developer.github.com/v3/activity/events/
 *
 * @package     Joomla.Platform
 * @subpackage  GitHub.Activity
 * @since       1.0
 */
class Events extends Package
{
	/**
	 * List public events.
	 *
	 * @since   1.0
	 * @return  object
	 */
	public function getPublic()
	{
		// Build the request path.
		$path = '/events';

		return $this->processResponse(
			$this->client->get($this->fetchUrl($path))
		);
	}

	/**
	 * List repository events.
	 *
	 * @param   string  $owner  Repository owner.
	 * @param   string  $repo   Repository name.
	 *
	 * @since   1.0
	 *
	 * @return  object
	 */
	public function getRepository($owner, $repo)
	{
		// Build the request path.
		$path = '/repos/' . $owner . '/' . $repo . '/events';

		return $this->processResponse(
			$this->client->get($this->fetchUrl($path))
		);
	}

	/**
	 * List issue events for a repository.
	 *
	 * @param   string  $owner  Repository owner.
	 * @param   string  $repo   Repository name.
	 *
	 * @since   1.0
	 * @return  object
	 */
	public function getIssue($owner, $repo)
	{
		// Build the request path.
		$path = '/repos/' . $owner . '/' . $repo . '/issues/events';

		return $this->processResponse(
			$this->client->get($this->fetchUrl($path))
		);
	}

	/**
	 * List public events for a network of repositories.
	 *
	 * @param   string  $owner  Repository owner.
	 * @param   string  $repo   Repository name.
	 *
	 * @since   1.0
	 * @return  object
	 */
	public function getNetwork($owner, $repo)
	{
		// Build the request path.
		$path = '/networks/' . $owner . '/' . $repo . '/events';

		return $this->processResponse(
			$this->client->get($this->fetchUrl($path))
		);
	}

	/**
	 * List public events for an organization.
	 *
	 * @param   string  $org  Organisation.
	 *
	 * @since   1.0
	 * @return  object
	 */
	public function getOrg($org)
	{
		// Build the request path.
		$path = '/orgs/' . $org . '/events';

		return $this->processResponse(
			$this->client->get($this->fetchUrl($path))
		);
	}

	/**
	 * List events that a user has received.
	 *
	 * These are events that you’ve received by watching repos and following users.
	 * If you are authenticated as the given user, you will see private events.
	 * Otherwise, you’ll only see public events.
	 *
	 * @param   string  $user  User name.
	 *
	 * @since   1.0
	 * @return  object
	 */
	public function getUser($user)
	{
		// Build the request path.
		$path = '/users/' . $user . '/received_events';

		return $this->processResponse(
			$this->client->get($this->fetchUrl($path))
		);
	}

	/**
	 * List public events that a user has received.
	 *
	 * @param   string  $user  User name.
	 *
	 * @since   1.0
	 * @return  object
	 */
	public function getUserPublic($user)
	{
		// Build the request path.
		$path = '/users/' . $user . '/received_events/public';

		return $this->processResponse(
			$this->client->get($this->fetchUrl($path))
		);
	}

	/**
	 * List events performed by a user.
	 *
	 * If you are authenticated as the given user, you will see your private events.
	 * Otherwise, you’ll only see public events.
	 *
	 * @param   string  $user  User name.
	 *
	 * @since   1.0
	 * @return  object
	 */
	public function getByUser($user)
	{
		// Build the request path.
		$path = '/users/' . $user . '/events';

		return $this->processResponse(
			$this->client->get($this->fetchUrl($path))
		);
	}

	/**
	 * List public events performed by a user.
	 *
	 * @param   string  $user  User name.
	 *
	 * @since   1.0
	 * @return  object
	 */
	public function getByUserPublic($user)
	{
		// Build the request path.
		$path = '/users/' . $user . '/events/public';

		return $this->processResponse(
			$this->client->get($this->fetchUrl($path))
		);
	}

	/**
	 * List events for an organization.
	 *
	 * This is the user’s organization dashboard.
	 * You must be authenticated as the user to view this.
	 *
	 * @param   string  $user  User name.
	 * @param   string  $org   Organisation.
	 *
	 * @since   1.0
	 * @return  object
	 */
	public function getUserOrg($user, $org)
	{
		// Build the request path.
		$path = '/users/' . $user . '/events/orgs/' . $org;

		return $this->processResponse(
			$this->client->get($this->fetchUrl($path))
		);
	}
}
